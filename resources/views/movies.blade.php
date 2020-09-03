@extends('layouts.app')

@section('content')
  <h1>Lista film</h1>
  @foreach ($movies as $movie)
    <div class="movie-list-container">
      <h2><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }} </a></h2>
      <p>Anno: {{ $movie->year }}</p>
      <p>Rating: {{ $movie->rating }}</p>
      <a class="small-btn" href="#">Modifica</a>
      <a class="small-btn delete" href="#">Elimina</a>
    </div>
  @endforeach

@endsection
