@extends('app')

@section('content')
    @if (Auth::check())
        <div class="jumbotron">
            <ul>
                <li>{{ Auth::user()->name }}</li>
                <li>{{ Auth::user()->token }}</li>
                <li>{{ Auth::user()->facebook_id }}</li>
                <li><img src="{{ Auth::user()->profile_pic_url }}" alt=""></li>
            </ul>
        </div>
    @endif
@stop
