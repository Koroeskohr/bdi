@extends('app')

@section('content')
    <img src="{{ $user->profile_pic_url }}" alt="">
    <h1>{{ $user->name }}</h1>
    @if ($user->promotion)
        <h2>IMAC {{ $user->promotion->year }}</h2>
    @else
        <p>L'utilisateur n'est dans aucune promotion actuellement</p>
    @endif
@stop