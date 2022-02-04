@extends('layout')

@section('title')
    {{$director->surname}}
@endsection

@section('content')
    <h3>{{$director->name.' '.$director->surname}}</h3>
    Data di nascita: {{$director->date_of_birth}} <br>
    <a href="/d/{{$director->id}}/edit">Modifica</a>
@endsection