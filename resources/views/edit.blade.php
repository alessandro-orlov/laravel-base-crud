@extends('layouts.app')

@section('content')

  <h1>Modifica film</h1>
  {{-- Validazione degli errori (campi richiesti non compilati) --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('movies.update', $movie->id) }}" method="post">
    @csrf
    @method('PUT')

    <div>
      <label>Titolo</label><br>
      <input type="text" name="title" value="{{ old('title') ? old('title') : $movie->title }}" placeholder="Inserisci il titolo del film">
    </div>
    <br>
    <div>
      <label>Anno:</label><br>
      <input type="text" name="year" value="{{ old('year') ? old('year') : $movie->year }}" placeholder="inserisci l'anno">
    </div>
    <br>
    <div>
      <label>Rating</label><br>
      <input type="text" name="rating" value="{{ old('rating') ? old('rating') : $movie->rating }}" placeholder="Inserisci il rating">
    </div>
    <br>
    <div>
      <label>Descrizione</label><br>
      <textarea name="description" rows="8" cols="100">{{ old('description') ? old('description') : $movie->description }}</textarea>
    </div>
    <br>
    <input type="submit" value="Salva le modifiche">
  </form>
  <br>
  <a href="{{ route('movies.index')}}"> torna indietro </a>

@endsection
