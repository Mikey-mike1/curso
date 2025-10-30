@extends('layouts.plantilla')

@section('titulo', 'Cursos '. $curso)

@section('contenido')
    <h1>Bienvenido al curso: {{$curso}} de la categoría: {{$categoria}} </h1>
@endsection