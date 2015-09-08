@extends('app')

@section('content')
    {!! Form::open(['action' => 'PromotionsController@store']) !!}
        @include('promotions._form', ['submitButtonText' => 'Ajouter une promotion'])
    {!! Form::close() !!}
@stop