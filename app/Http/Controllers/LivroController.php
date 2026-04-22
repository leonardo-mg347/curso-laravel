<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLivroRequest;
use App\Http\Requests\UpdateLivroRequest;
use App\Models\Livro;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', ['livros_catalogados'=> $livros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivroRequest $request)
    {
        dd($request->titulo);
        $livro = new Livro;
        $livro->titulo = $request->titulo;
        $livro->autor  = $request->autor;
        $livro->isbn   = $request->isbn;
        $livro->save();
        return redirect("/livros/{$livro->id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        $livro = Livro::where('isbn', $isbn)->first();
        return view('livros.show', ['livro_escolhido' => $livro]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLivroRequest $request, Livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        //
    }
}
