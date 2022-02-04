@extends('layout')
@section('title','FILM')

@section('content')
    Lista Film
    <ul>
        @foreach ($movies as $movie)
            <li><a href="/movie/{{$movie->id}}">{{$movie->title}}</a></li>
        @endforeach
        <a href="/movie/create">Aggiungi un film</a>
    </ul>
@endsection
