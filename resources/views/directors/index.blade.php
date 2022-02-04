@extends('layout')
@section('title','REGISTI')

@section('content')
    Lista registi
    <ul>
        @foreach ($directors as $director)
            <li><a href="/director/{{$director->id}}">{{$director->name}}</a></li>
        @endforeach
        <a href="/director/create">Aggiungi un regista</a>
    </ul>
@endsection
