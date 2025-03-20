<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('home');
});

Route::resource('listas', ListaController::class);
Route::resource('usuarios', UsuarioController::class);
