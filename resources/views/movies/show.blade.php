@extends('layout')

@section('title')
    {{$movie->title}}
@endsection

@section('content')
    <h3>{{$movie->title}}</h3>
    Data di uscita: {{$movie->date}} <br>
    Regista: {{$director->name}} <br>
    Punteggio: {{$movie->score}} <br>
    <a href="/d/{{$director->id}}">Pagina del regista</a><br>
    <form action="/m/{{$movie->id}}/edit" method="GET"><button>Modifica</button></form>
@endsection