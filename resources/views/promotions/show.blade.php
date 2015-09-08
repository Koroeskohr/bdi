@extends('app')

@section('content')
    <h1>Promotion {{ $promotion->year }}</h1>
    <ul>
        @foreach($promotion->users as $user)
            <li><img src="{!! $user->profile_pic_url !!}" alt=""> {{ $user->name }}</li>
        @endforeach
    </ul>
@stop