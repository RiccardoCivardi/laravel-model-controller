@extends('layout.main')

@section('content')
    <h1>ERRORE 404!</h1>
    <h3>{{$exception->getMessage()}}</h3>
@endsection

@section('title')
    | ERRORE 404
@endsection
