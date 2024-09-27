<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        return "Lista de Usuarios";
    }

    public function create() {
        return "Add usuario";
    }

    public function show($id) {
        return "Mostrar usuario especifico: $id";
    }
}
