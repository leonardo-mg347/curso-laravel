<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivroFulano;

class LivroFulanoController extends Controller
{
    public function index(){
        $livros = LivroFulano::all();
        return view('livros_fulano/index', ['livros_fulano' => $livros]);
    }
    
    public function show($livro){
        $livro_escolhido= LivroFulano::where('titulo', $livro)->first();
        return view('livros_fulano/show' ,['livro' => $livro_escolhido]);
    }
}
