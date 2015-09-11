@extends('app')

@section('content')
    {!! Form::open(['action' => 'ArticlesController@store']) !!}
        @include('articles/_form', ['submitButtonText' => 'Ajouter un article'])
    {!! Form::close() !!}
@stop