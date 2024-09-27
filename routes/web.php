<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;

/* LOGIN */
Route::get('/', LoginController::class);

/* USUARIOS */
Route::controller(UsuarioController::class)->group(function() {
    Route::get('usuarios', 'index');
    Route::get('usuarios/create', 'create');
    Route::get('usuarios/show/{id}', 'show');
});

/* PRODUCTOS */
Route::controller(ProductoController::class)->group(function() {
    Route::get('productos', 'index');
    Route::get('productos/create', 'create');
    Route::get('productos/show/{id}', 'show');
});

/* TIENDAS */
Route::controller(TiendaController::class)->group(function() {
    Route::get('tiendas', 'index');
    Route::get('tiendas/create', 'create');
    Route::get('tiendas/show/{id}', 'show');
});

/* PEDIDOS */
Route::controller(PedidoController::class)->group(function() {
    Route::get('pedidos', 'index');
    Route::get('pedidos/create', 'create');
    Route::get('pedidos/show/{id}', 'show');
});

