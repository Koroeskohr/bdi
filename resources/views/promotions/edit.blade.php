@extends('app')

@section('content')
    <h1>Editer la promotion : {{ $promotion->year }}</h1>
    {!! Form::model($promotion, ['method' => 'PATCH', 'action' => ['PromotionsController@update', $promotion->id]]) !!}
        @include('promotions._form', ['submitButtonText' => 'Ajouter une promotion'])
    {!! Form::close() !!}
@stop