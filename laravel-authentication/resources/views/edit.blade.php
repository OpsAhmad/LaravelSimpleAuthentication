{{-- Extend app as master page --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box">
            <h1>Edit</h1>
            <form action="{{route('update')}}" method="POST">
                @method('patch')
                @csrf
                <input type="name" name="name" value="{{Auth::user()->name}}" placeholder="Your name">
                @error('name')
                    {{$message}}
                @enderror
                <br>
                <div>
                    <button type="submit">Update</button>
                </div>
                <br>
                <div>
                    <a href="{{route('detail')}}">Home</a>
                </div>
            </form>
        </div>
    </div>
@endsection