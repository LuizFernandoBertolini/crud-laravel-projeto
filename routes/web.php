<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CepController;

Route::resource('clientes', ClienteController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::resource("/usuarios", UsuarioController::class);

Route::get('/api/cep/{cep}', [CepController::class, 'fetch']);