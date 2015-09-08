@extends('app')

@section('content')
    @if (Auth::check())
        <ul>
            <li>{{ Auth::user()->name }}</li>
            <li>{{ Auth::user()->token }}</li>
            <li>{{ Auth::user()->facebook_id }}</li>
            <li><img src="{{ Auth::user()->profile_pic_url }}" alt=""></li>
        </ul>
    @endif
@stop
