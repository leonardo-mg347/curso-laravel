<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLivroLeoRequest;
use App\Http\Requests\UpdateLivroLeoRequest;
use App\Models\LivroLeo;

class LivroLeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = LivroLeo::all();
        return view('livrosleo/index', ['livros' => $livros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livrosleo.create',[ 'livro' => new LivroLeo]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivroLeoRequest $request)
    {
        $livro = LivroLeo::create($request->validated());
        $request->session()->flash('alert-success', 'Livro cadastrado com sucesso');
        return redirect('/livrosleo');
    }

    /**
     * Display the specified resource.
     */
    public function show(LivroLeo $livrosleo)
    {
        return view('livrosleo.show', ['livro' => $livrosleo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LivroLeo $livrosleo)
    {
        return view('livrosleo.edit', ['livro' => $livrosleo]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLivroLeoRequest $request, LivroLeo $livrosleo)
    {
        $livrosleo->update($request->validated());
        $request->session()->flash('alert-info', 'Livro atualizado com sucesso.');
        return redirect('/livrosleo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LivroLeo $livrosleo)
    {
        $livrosleo->delete();
        return redirect('/livrosleo');
    }
}
