<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index() {
        return "Lista de pedido";
    }

    public function create() {
        return "Add pedido";
    }

    public function show($id) {
        return "Mostrar pedido especifico: $id";
    }
}
