{{-- Extend app as master page --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
        <h1>Hola,{{Auth::user()->name}}</h1>
        <br>
        <div class="between">
            <a href="{{route('edit')}}" class="btn-link">Edit</a>
            <a href="{{route('logout')}}" class="btn-link">Logout</a>
        </div>
    </div>
    </div>
@endsection