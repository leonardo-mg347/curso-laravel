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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivroLeoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LivroLeo $livroLeo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LivroLeo $livroLeo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLivroLeoRequest $request, LivroLeo $livroLeo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LivroLeo $livroLeo)
    {
        //
    }
}
