<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroLeoController;
use App\Http\Controllers\IndexController;

Auth::routes();

Route::get('/', [IndexController::class, 'index']);

Route::resource('/livros', LivroController::class);

Route::resource('/livrosleo', LivroLeoController::class);

