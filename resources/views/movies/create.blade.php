@extends('layout')

@section('title','Crea')

@section('content')
    <form action="/movie" method="post">
        @csrf
        <input type="text" name="title" placeholder="Titolo" required><br>
        Score:<input type="number" name="score" step="0.1" required><br>
        <input type="date" name="date" placeholder="Uscita" required><br>
        ID<input type="number" name="director_id" required> <br>
        <input type="submit" value="Aggiungi">
    </form>
    
@endsection