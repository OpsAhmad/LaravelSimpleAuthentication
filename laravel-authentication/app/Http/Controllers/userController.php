<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    // login view handle
    public function login()
    {
        return view('login');
    }
    // login post data handle
    public function login_verify()
    {
        // lisat validation
        $list = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        // validate
        request()->validate($list);
        // get the request data
        $email = request('email');
        $password = request('password');
        // verify data to our users table
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // incoming data true
            session()->flash('message', "<script>alert('Authorize')</script>");
            // redirect to detail page
            return redirect(route('detail'));
        }
        // incoming data false
        session()->flash('message', "<script>alert('Not Authorize')</script>");
        // redirect back to login page
        return back();
    }
    // register page view handle
    public function register()
    {
        return view('register');
    }
    // register post data handle
    public function register_verify()
    {
        // lisat validation
        $list = [
            'name' => 'required|max:199',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ];
        // validate
        request()->validate($list);
        // get the request data
        $data = [
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ];
        // store to our database
        User::create($data);
        // register successful message
        session()->flash('message', "<script>alert('Register successful')</script>");
        // redirect to login page
        return redirect(route('login'));
    }
    //handle logout
    public function logout()
    {
        // Logout
        Auth::logout();
        // Redirect to login page
        return redirect(route('login'));
    }
    //detail view handle
    public function detail()
    {
        return view('detail');
    }
    // edit view handle
    public function edit()
    {
        return view('edit');
    }
    //edit post data handle
    public function update()
    {
        // validate incoming data
        request()->validate(['name' => 'required|max:199']);
        // get the authenticated user id
        $userId = Auth::user()->id;
        // update the user data
        $data = [
            'name' => request('name')
        ];
        User::where('id', $userId)->update($data);
        // update successful message
        session()->flash('message', "<script>alert('Update successful')</script>");
        // redirect to homepage / detail page
        return redirect(route('detail'));
    }
}
