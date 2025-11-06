 @extends('layouts.plantilla')

@section('titulo', 'Contactanos')

@section('titulo_pag', 'Contacto')

@section('contenido')

    @if ( session('status') )
    <div class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
        <div class="flex items-center">
          <svg class="shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <h3 class="text-lg font-medium">Correo Enviado con Exito</h3>
    @endif

    <form action="{{ route('contactanos.store') }}" method="POST" class="space-y-6">
        @csrf
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre" class="border border-gray-300 rounded-md px-2 py-1 w-full mb-4">

        <label for="correo">Correo </label>
        <input type="text" name="correo" id="correo" placeholder="Tu correo" class="border border-gray-300 rounded-md px-2 py-1 w-full mb-4">

        <label for="mensaje">Mensaje </label>
        <input type="text" name="mensaje" id="mensaje" placeholder="Tu Mensaje" class="border border-gray-300 rounded-md px-2 py-1 w-full mb-4">
        <button type="submit" class="mt-4 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar Correo</button>
    </form>

@endsection