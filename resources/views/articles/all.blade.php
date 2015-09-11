@extends('app')

@section('content')
    <ul>
    @foreach($articles as $article)
            <li>
                <a href="{{ action('ArticlesController@show', $article->id) }}">{{ $article->title }}</a>
                @if($article->excerpt)
                    <p>{{ $article->excerpt }}</p>
                @endif
                <a href="{{ action('ArticlesController@edit', $article->id) }}">Editer</a>
            </li>
    @endforeach
    </ul>
@stop
