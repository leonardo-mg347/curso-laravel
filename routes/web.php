<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\livroController;
use App\Http\Controllers\LivroFulanoController;


Route::get('/livros', [livroController::class, 'index']);

Route::get('/livros/{isbn}', [livroController::class, 'show']);

Route::get('/livros_leonardo', [LivroFulanoController::class, 'index']);

Route::get('/livros_leonardo/{livro}', [LivroFulanoController::class, 'show']);