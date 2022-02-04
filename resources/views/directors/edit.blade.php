@extends('layout')

@section('title')
    {{$director->name}}
@endsection

@section('content')
    <form action="/d/{{$director->id}}" method="post">
        @csrf
        @method('PATCH')

            <input type="text" name="name" value="{{$director->name}}" required><br>
            <input type="text" name="surname" value="{{$director->surname}}" required><br>
            <input type="date" name="date_of_birth" value="{{$director->date_of_birth}}" required> <br>
            <input type="submit" value="Modifica">
    </form>

    <form action="/d/{{$director->id}}" method="POST" >
        @csrf
        @method('DELETE')
            <input type="submit" value="ELIMINA">
    </form>
@endsection