<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index() {
        return "Lista de Tienda";
    }

    public function create() {
        return "Add Tienda";
    }

    public function show($id) {
        return "Mostrar Tienda especifico: $id";
    }
}
