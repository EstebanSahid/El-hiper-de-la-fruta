<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        return "Lista de producto";
    }

    public function create() {
        return "Add producto";
    }

    public function show($id) {
        return "Mostrar producto especifico: $id";
    }
}
