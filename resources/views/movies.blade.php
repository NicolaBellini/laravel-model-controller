@extends('layout.main')

@section('content')

<div class="container justify-content-center p-5 d-flex flex-wrap">
@foreach ($movies as $movie)

<div class="card m-2 " style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$movie->title}}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
        <p class="card-text">data di rilascio:{{$movie->date}}</p>
        <p class="card-text">voto:{{$movie->vote}}</p>
        <a href="{{ route('moviesDetails', ['id' => $movie->id]) }}" class="card-link">Info</a>

    </div>
</div>
@endforeach
</div>

@endsection
