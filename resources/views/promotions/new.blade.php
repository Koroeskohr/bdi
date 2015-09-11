@extends('app')

@section('content')
    {!! Form::open(['action' => 'PromotionsController@store']) !!}
        @include('promotions._form', ['submitButtonText' => 'Ajouter une promotion', 'date' => date('Y')])
    {!! Form::close() !!}
@stop