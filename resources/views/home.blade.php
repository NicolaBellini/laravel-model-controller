@extends('layout.main')

@section('content')

  <section class="hero">
    <h1>La tua lista di film</h1>
    <p>Scopri i migliori film disponibili al momento</p>
    <a href="{{route('movies')}}" class="btn">Esplora il Catalogo</a>
  </section>

@endsection
