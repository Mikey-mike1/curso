@extends('layouts.plantilla')

@section('titulo', 'Cursos')

@section('titulo_pag', 'Bienvenido a la página de cursos')

@section('contenido')

    <h2>Hola, {{ $nombre }}</h2>

    <ul>
        @foreach ($cursos as $curso)
            <li> <a href="{{ route('cursos.show', [$curso->nombre, $curso->descripcion]) }}">{{ $curso->nombre }}</a> </li>

        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection