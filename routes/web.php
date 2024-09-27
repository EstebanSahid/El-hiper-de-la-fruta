<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;

/* LOGIN */
Route::get('/', LoginController::class);

/* USUARIOS */
Route::controller(UsuarioController::class)->group(function() {
    Route::get('usuarios', 'index');
    Route::get('usuarios/create', 'create');
    Route::get('usuarios/show/{id}', 'show');
});



/* PRODUCTOS */
Route::get('productos', function() {
    return "Bienvenidos productos";
});

/* TIENDAS */
Route::get('tiendas', function() {
    return "Bienvenidos tiendas";
});

/* PEDIDOS */
Route::get('pedidos', function() {
    return "Bienvenidos pedidos";
});

