
@extends('layouts.layout')

@section('title' , 'Projects')


@section('content')


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @yield('title')
                </div>

                <div class="links">
                    <a href="/about">About</a>
                    <a href="/contact">Contact</a>
                    <p>zopa</p>
                </div>
                <ul>
                    
                    @foreach ($projects as $project)

                        <li>{{ $project }}</li>

                    @foreach
                    

                </ul>
            </div>
        </div>


@endsection