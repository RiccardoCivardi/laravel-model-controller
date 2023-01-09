@extends('layout.main')

@section('content')
    <h1>{{$movie->title}}</h1>
    <ul>
        <li>Titolo originale: {{$movie->original_title}}</li>
        <li>Nazionalità: {{$movie->nationality}}</li>
        <li>Data d'uscita: {{$movie->date}}</li>
        <li>Voto: {{$movie->vote}}</li>
    </ul>
@endsection

@section('title')
    | DETTAGLIO FILM
@endsection
