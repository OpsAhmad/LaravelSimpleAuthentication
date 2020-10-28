{{-- Extend app as master page --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box">
            <h1>Login</h1>
            <form action="{{route('login.verify')}}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Your email">
                @error('email')
                {{$message}}
                @enderror
                <br>
                <input type="password" name="password" placeholder="Your password">
                @error('password')
                {{$message}}
                @enderror
                <br>
                <div>
                    <button type="submit">Login</button>
                </div>
                <br>
                <div>
                    Don't have account? <a href="{{route('register')}}">Register</a>
                </div>
            </form>
        </div>
    </div>
@endsection