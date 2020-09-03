<h1>Lista film</h1>
@foreach ($movies as $movie)
  <div>
    <h2><a href="{{ route('movies.show', $movie->id) }}"> Titolo: {{ $movie->title }} </a></h2>
    <p>Anno: {{ $movie->year }}</p>
    <p>Rating: {{ $movie->rating }}</p>
  </div>
@endforeach
