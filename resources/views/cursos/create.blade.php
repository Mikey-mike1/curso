@extends('layouts.plantilla')

@section('titulo', 'Crear|Cursos')
@section('titulo_pag', 'Bienvenido a la página de crear cursos')


@section('contenido')
      <form action="{{Route('cursos.store')}}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre del curso</label>
            <div class="mt-2">
              <input type="text" value="{{ old('nombre') }}" name="nombre" id="nombre" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            
        @error('nombre')
        <small>*{{$message}}</small>
        @enderror
        </div>


        <div>
            <label for="descripcion" class="block text-sm font-medium leading-6 text-gray-900">Descripción del curso</label>
            <div class="mt-2">
              <input type="text" value="{{ old('descripcion') }}" name="descripcion" id="descripcion" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
                    @error('descripcion')
        <small>*{{$message}}</small>
        @enderror
        </div>


        <div>
            <label for="categoria" class="block text-sm font-medium leading-6 text-gray-900">Categoría del curso</label>
            <div class="mt-2">
              <input type="text" value="{{ old('categoria') }}" name="categoria" id="categoria" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
                            @error('categoria')
        <small>*{{$message}}</small>
        @enderror
        </div>


        <button type="submit" class="mt-4 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear Curso</button>
      </form>
@endsection