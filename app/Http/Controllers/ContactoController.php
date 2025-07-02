<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    // Mostrar formulario de contacto
    public function form()
    {
        return view('contacto');
    }

    // Procesar y enviar correo
    public function enviar(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'tipo' => 'required|string',
            'mensaje' => 'required|string',
        ]);

        // Enviar correo a ti (administrador)
        Mail::to('hilariordz936@gmail.com')->send(new ContactoMailable($datos));

        // Enviar copia al cliente
        //Mail::to($datos['email'])->send(new ContactoMailable($datos));

        return back()->with('success', '¡Mensaje enviado correctamente!');//
    }
}
