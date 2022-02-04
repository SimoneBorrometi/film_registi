@extends('layout')
@section('title','FILM')

@section('content')
    Lista Film
    <ul>
        @foreach ($movies as $movie)
            <li><a href="/m/{{$movie->id}}">{{$movie->title}}</a></li>
        @endforeach
        <a href="/m/create">Aggiungi un film</a>
    </ul>
@endsection
