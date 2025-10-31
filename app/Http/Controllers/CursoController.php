<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate();
        $nombre = 'Usuario Nuevo';
        return view('cursos.index', compact('nombre', 'cursos'));
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
