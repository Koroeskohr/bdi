@extends('app')

@section('content')
    <ul>
    @foreach($users as $user)
            <li>
                <a href="{{ action('UsersController@show', $user->id) }}" >{{ $user->name }}</a> - IMAC {{ $user->promotion['year'] }} -
                <a href="{{ action('UsersController@edit', $user->id) }}">Editer</a>
            </li>
    @endforeach
    </ul>
@stop
