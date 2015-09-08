@extends('app')

@section('content')
    <ul>
    @foreach($promotions as $promotion)
            <li>
                <a href="{{ action('PromotionsController@show', $promotion->id) }}">Promotion IMAC {{ $promotion->year }}</a> - <p>{{ count($promotion->users) }} élèves</p>
                <a href="{{ action('PromotionsController@edit', $promotion->id) }}">Editer</a>
            </li>
    @endforeach
    </ul>
@stop
