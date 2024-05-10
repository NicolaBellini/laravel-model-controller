@extends('layout.main')

@section('content')

<div class="container d-flex flex-wrap">
@foreach ($movies as $movie)

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$movie->title}}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
        <p class="card-text">data di rilascio:{{$movie->date}}</p>
        <p class="card-text">voto:{{$movie->vote}}</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>
@endforeach
</div>

@endsection
