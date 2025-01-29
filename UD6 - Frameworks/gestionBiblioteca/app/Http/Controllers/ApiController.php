<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $libros = Libros::with("autor")->get();
        return response()->json($libros);
    }
}
