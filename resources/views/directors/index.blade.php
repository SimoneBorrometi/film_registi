@extends('layout')
@section('title','REGISTI')

@section('content')
    Lista registi
    <ul>
        @foreach ($directors as $director)
            <li><a href="/d/{{$director->id}}">{{$director->name}}</a></li>
        @endforeach
        <a href="/d/create">Aggiungi un regista</a>
    </ul>
@endsection
