@extends('layouts.app')

@section('content')
  <h1>Lista film</h1>
  @foreach ($movies as $movie)
    <div class="movie-list-container">
      <h2><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }} </a></h2>
      <p>Anno: {{ $movie->year }}</p>
      <p>Rating: {{ $movie->rating }}</p>
      <a class="small-btn" href="{{ route('movies.edit', $movie->id) }}">Modifica</a>
      {{-- Cancellazione del film (il form serve per richiamare il metodo) --}}
      <form class="inline-form" action="{{ route('movies.destroy', $movie->id) }}" method="post">
				@csrf
				@method('DELETE')

				<input class="small-btn delete" type="submit" value="Elimina">
			</form>

      {{-- <a class="small-btn delete" href="#">Elimina</a> --}}
    </div>
  @endforeach

@endsection
