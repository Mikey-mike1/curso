<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

public function store(Request $request)
{
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'correo' => 'required|email|max:255',
        'mensaje' => 'required|string'
    ]);

    // Enviar un array directamente al Mailable
    $contacto = [
        'nombre' => $validated['nombre'],
        'correo' => $validated['correo'],
        'mensaje' => $validated['mensaje']
    ];

    Mail::to('sandovalmiguelfonseca@gmail.com')->send(new ContactanosMailable($contacto));

    return back()->with('success', '¡Mensaje enviado correctamente!');
}

}
