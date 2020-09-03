<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $movies = Movie::all();

      // Inverto l'ordine di visualizzazione dei film:
      // Ultimo film inserito sarà il primo della lista
      $movies = Movie::orderBy('created_at', 'desc')->get();

      return view('movies', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validazione
      $request->validate($this->validationData());

      // Metto nella variabile i dati passati dalla pagina 'create' che restituisce un array
      $requested_info = $request->all();

      // Creo nuova istanza con dati passati dall'array
      $movieNew = new Movie;
      $movieNew->title = $requested_info['title'];
      $movieNew->year = $requested_info['year'];
      $movieNew->rating = $requested_info['rating'];
      $movieNew->description = $requested_info['description'];

      // Salvo l'istanza nel database mySQL
      $movieNew->save();


      $movie = Movie::orderBy('id', 'desc')->first();

      return redirect()->route('movies.show', $movie);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
      // // $movies = Movie::where('id', $id)->first();
      // //  or
      // $movie = Movie::find($id);
      //
      // // In caso di: public function show($id) riga:51
      // if (empty($movie)) {
      //   abort(404);
      // }

      return view('show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
      // Validazione
      $request->validate($this->validationData());

      // Metto nella variabile i dati passati dalla pagina 'create' che restituisce un array
      $requested_info = $request->all();

      $movie->update($requested_info);

      return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
      $movie->delete();

     return redirect()->route('movies.index');
    }

    // Validazione
    protected function validationData() {
      return [
        'title' => 'required|max:255',
        'year' => 'required|integer|min:1900|max:2020',
        'description' => 'required',
        'rating' => 'required|integer|min:1|max:10',
      ];
    }

}
