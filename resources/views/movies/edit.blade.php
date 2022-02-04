@extends('layout')

@section('title')
    {{$movie->title}}
@endsection

@section('content')
    <form action="/m/{{$movie->id}}" method="post">
        @csrf
        @method('PATCH')

            <input type="text" title="title" value="{{$movie->title}}" required><br>
            <input type="date" title="date" value="{{$movie->date}}" required> <br>
            <input type="number" name="score" step="0.1" value="{{$movie->score}}" required><br>
            <input type="submit" value="Modifica">
    </form>

    <form action="/d/{{$movie->id}}" method="POST" >
        @csrf
        @method('DELETE')
            <input type="submit" value="ELIMINA">
    </form>
@endsection