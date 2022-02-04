@extends('layout')

@section('title','Crea')

@section('content')
    <form action="/director" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome" required><br>
        <input type="text" name="surname" placeholder="Cognome" required><br>
        <input type="date" name="date_of_birth" required><br>
        <input type="submit" value="Aggiungi" required>
    </form>
    
@endsection