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

    public function store(Request $request)
    {
      $curso = new Curso();
      $curso->nombre = $request->input('nombre');
      $curso->descripcion = $request->input('descripcion');
      $curso->categoria = $request->input('categoria');
     $curso->save();

     return redirect()->route('cursos.show', [$curso->nombre, $curso->descripcion]);
    }

    public function show($curso, $categoria)
    {
        return view('cursos.show', compact('curso', 'categoria'));
    }
}
