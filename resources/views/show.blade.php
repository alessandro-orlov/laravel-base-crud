<h1>Show Movie</h1>
<h3>Title {{$movie->title}}</h3>
<p>Anno: {{ $movie->year }}</p>
<p>Rating: {{ $movie->rating }}</p>
<p>
  <b>Description:</b> <br>
  {{$movie->description}}
</p>
<a href="{{ route('movies.index')}}"> torna indietro </a>
