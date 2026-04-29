<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroLeoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);

Route::resource('/livros', LivroController::class);

Route::resource('/livrosleo', LivroLeoController::class);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);