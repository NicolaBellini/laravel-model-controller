@extends('layout.main')

@section('content')

<div class="container">
    <h2>titolo: {{$movie->title}}</h2>
    <h2>titolo originale: {{$movie->original_title}}</h2>
    <h2>data di rilascio: {{$movie->date}}</h2>
    <h2>voto: {{$movie->vote}}</h2>
</div>

@endsection
