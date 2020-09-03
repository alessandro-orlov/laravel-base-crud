@extends('layouts.app')

@section('content')
  <h1>Inserisci un film</h1>

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

  <form action="{{ route('movies.store')}}" method="post">
    @csrf
    @method('POST')

    <div>
      <label>Titolo</label><br>
      <input type="text" name="title" value="{{ old('title') }}" placeholder="Inserisci il titolo del film">
    </div>
    <br>
    <div>
      <label>Anno:</label><br>
      <input type="text" name="year" value="{{ old('year') }}" placeholder="inserisci l'anno">
    </div>
    <br>
    <div>
      <label>Rating</label><br>
      <input type="text" name="rating" value="{{ old('rating') }}" placeholder="Inserisci il rating">
    </div>
    <br>
    <div>
      <label>Descrizione</label><br>
      <textarea name="description" rows="8" cols="100">{{ old('description') }}</textarea>
    </div>
    <br>
    <input type="submit"value="Salva il film">
  </form>
  <br>
  <a href="{{ route('movies.index')}}"> torna indietro </a>
@endsection
