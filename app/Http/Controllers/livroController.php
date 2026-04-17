<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class livroController extends Controller
{
    public function index(){
        $livros = Livro::all();
        return view('livros.index', ['livros_catalogados'=> $livros]);
    }

    public function show($isbn){
        $livro = Livro::where('isbn', $isbn)->first();
        return view('livros.show', ['livro_escolhido' => $livro]); 
    }
}
