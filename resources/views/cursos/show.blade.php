@extends('layouts.plantilla')

@section('titulo', 'Cursos '. $curso->nombre)

@section('contenido')
    <h1>Bienvenido al curso: <strong> {{$curso->nombre}} </strong></h1>
    <h4>de la categoría: {{$curso->categoria}}</h4>

    <a class="decoration-pink-500 no-underline hover:underline ..." href="{{ route('cursos.edit', $curso) }}">Editar Curso</a>

    <form action="{{route('cursos.destroy', [$curso->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="mt-4 rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Eliminar Curso</button>
    </form>
@endsection