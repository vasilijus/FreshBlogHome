
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
                    zopa
                </div>
                <ul>
                @foreach ($projects as $project)
                    <li>{{ $project->title }}, {{ $project->description }}</li>
                @endforeach
                <br />
                @foreach ($names as $name)

                        <li>{{ $name }}</li>

                @endforeach
                </ul>
            </div>
        </div>


@endsection