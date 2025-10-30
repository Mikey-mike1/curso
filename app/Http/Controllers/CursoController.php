<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $nombre = 'Usuario Nuevo';
        return view('cursos.index', compact('nombre'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function show($curso, $categoria)
    {
        return view('cursos.show', compact('curso', 'categoria'));
    }
}
