<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroFulanoController;


Route::resource('/livros', LivroController::class);

Route::get('/livros_leonardo', [LivroFulanoController::class, 'index']);

Route::get('/livros_leonardo/{livro}', [LivroFulanoController::class, 'show']);