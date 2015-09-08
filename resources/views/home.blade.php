@extends('app')

@section('content')
    <div class="panel">
        <a href="/login/facebook">Login with Facebook</a>
        <a href="/auth/logout">Logout</a>
    </div>
    @if (Auth::check())
        <ul>
            <li>{{ Auth::user()->name }}</li>
            <li>{{ Auth::user()->token }}</li>
            <li>{{ Auth::user()->facebook_id }}</li>
            <li><img src="{{ Auth::user()->profile_pic_url }}" alt=""></li>
        </ul>

    @endif
@stop
