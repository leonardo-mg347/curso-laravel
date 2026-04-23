<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroLeoController;


Route::resource('/livros', LivroController::class);

Route::resource('/livrosleo', LivroLeoController::class);