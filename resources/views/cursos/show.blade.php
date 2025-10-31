@extends('layouts.plantilla')

@section('titulo', 'Cursos '. $curso)

@section('contenido')
    <h1>Bienvenido al curso: <strong> {{$curso}} </strong></h1>
    <h4>de la categoría: {{$categoria}}</h4>
@endsection