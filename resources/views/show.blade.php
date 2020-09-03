@extends('layouts.app')

@section('content')
  <h1>Dettagli Film</h1>
  <h2>{{$movie->title}}</h2>
  <p>Anno: {{ $movie->year }}</p>
  <p>Rating: {{ $movie->rating }}</p>
  <p>
    <b>Description:</b> <br>
    {{$movie->description}}
  </p>
  <a href="{{ route('movies.index')}}"> torna alla lista di film </a>
@endsection
