<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitudAyuda;
use Illuminate\Support\Facades\Auth;

class SolicitudAyudaController extends Controller
{
    // Usuario: enviar solicitud
    public function store(Request $request)
    {
        $request->validate([
            'mensaje' => 'required|string|max:1000',
        ]);
        SolicitudAyuda::create([
            'user_id' => Auth::id(),
            'mensaje' => $request->mensaje,
            'estado' => 'pendiente',
        ]);
        return redirect()->back()->with('success', '¡Tu solicitud de ayuda fue enviada!');
    }

    // Agente: ver todas las solicitudes
    public function index()
    {
        $solicitudes = SolicitudAyuda::with('usuario')->orderBy('created_at', 'desc')->get();
        return view('agente.solicitudes', compact('solicitudes'));
    }

    // Agente: responder y marcar como atendida
    public function responder(Request $request, $id)
    {
        $request->validate([
            'respuesta' => 'required|string|max:2000',
        ]);
        $solicitud = SolicitudAyuda::findOrFail($id);
        $solicitud->respuesta = $request->respuesta;
        $solicitud->estado = 'atendida';
        $solicitud->agente_id = Auth::id();
        $solicitud->save();
        return redirect()->back()->with('success', '¡Respuesta enviada y solicitud marcada como atendida!');
    }
} 