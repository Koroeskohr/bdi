@extends('app')

@section('content')
    <h1>Editer la promotion d'un utilisateur : {{ $user->name }}</h1>
    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id]]) !!}
        @include('users._form', ['submitButtonText' => 'Editer l\'utilisateur'])
    {!! Form::close() !!}
@stop