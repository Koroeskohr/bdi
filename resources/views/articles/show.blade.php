@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <h2>{{ $article->excerpt }}</h2>
    <h3>Auteur : {{ $article->author->name }}</h3>
    <p>
        {{ $article->body }}
    </p>

@stop