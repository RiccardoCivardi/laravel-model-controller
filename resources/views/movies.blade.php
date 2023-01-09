@extends('layout.main')

@section('content')
    <h1>FILM</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('detail', $movie->id) }}">{{$movie->id}} - {{$movie->title}}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('title')
    | FILM
@endsection
