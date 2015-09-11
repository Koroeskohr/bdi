@extends('app')

@section('content')
    <ul>
    @foreach($promotions as $promotion)
            <li>
                <a href="{{ action('PromotionsController@show', $promotion->year) }}">Promotion IMAC {{ $promotion->year }}</a> - <p>{{ count($promotion->users) }} élèves</p>
                <a href="{{ action('PromotionsController@edit', $promotion->year) }}">Editer</a>
            </li>
    @endforeach
    </ul>
@stop
