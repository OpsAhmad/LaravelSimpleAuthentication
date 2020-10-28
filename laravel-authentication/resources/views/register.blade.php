{{-- Extend app as master page --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box">
            <h1>Register</h1>
            <form action="{{route('register.verify')}}" method="POST">
                @csrf
                <input type="name" name="name" placeholder="Your name">
                @error('name')
                {{$message}}
                @enderror
                <br>
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
                <input type="password" name="confirm_password" placeholder="Confirm your password">
                @error('confirm_password')
                {{$message}}
                @enderror
                <br>
                <div>
                    <button type="submit">Register</button>
                </div>
                <br>    
                <div>
                Aready have account? <a href="{{route('login')}}">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection