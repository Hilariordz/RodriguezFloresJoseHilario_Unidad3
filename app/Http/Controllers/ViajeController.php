<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viaje;
use Illuminate\Support\Facades\Auth;

class ViajeController extends Controller
{
    public function planeados() {
        return response()->json(Viaje::where('estado', 'planeado')->get());
    }

    public function activos() {
        return response()->json(Viaje::where('estado', 'activo')->get());
    }

    public function pasados() {
        return response()->json(Viaje::where('estado', 'pasado')->get());
    }

    public function dashboard()
    {
        $user = Auth::user();
        $viajes = Viaje::where('user_id', $user->id)->get();
        $reservaciones = Viaje::where('user_id', $user->id)->where('fecha_regreso', '<', now())->get();
        $es_nuevo = ($viajes->count() === 0 && $reservaciones->count() === 0);
        return view('dashboard', compact('viajes', 'reservaciones', 'es_nuevo'));
    }

    public function cotizar(Request $request)
    {
        $data = $request->only(['destino', 'fecha_salida', 'fecha_regreso', 'personas']);
        return response()->json(['cotizacion' => $data, 'precio' => rand(5000, 20000)]);
    }

    public function cotizarView()
    {
        return view('user.cotizar');
    }

    public function guardadosView()
    {
        $user = Auth::user();
        $viajes = \App\Models\Viaje::where('user_id', $user->id)->get();
        return view('user.guardados', compact('viajes'));
    }

    public function pasadosView()
    {
        $user = Auth::user();
        $reservaciones = \App\Models\Viaje::where('user_id', $user->id)->where('fecha_regreso', '<', now())->get();
        return view('user.pasados', compact('reservaciones'));
    }

    public function guardar(Request $request)
    {
        $viaje = new Viaje();
        $viaje->user_id = Auth::id();
        $viaje->destino = $request->destino;
        $viaje->fecha_salida = $request->fecha_salida;
        $viaje->fecha_regreso = $request->fecha_regreso;
        $viaje->personas = $request->personas;
        $viaje->precio = $request->precio;
        $viaje->save();

        return redirect()->route('dashboard')->with('success', '¡Viaje guardado!');
    }

    public function show($id)
    {
        $viaje = Viaje::findOrFail($id);
        return view('viajes.show', compact('viaje'));
    }

    public function destroy($id)
    {
        $viaje = Viaje::findOrFail($id);
        if ($viaje->user_id == Auth::id()) {
            $viaje->delete();
        }
        return redirect()->route('dashboard')->with('success', 'Viaje eliminado');
    }
}
