<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viaje;

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

    public function guardar(Request $request) {
        $viaje = new Viaje();
        $viaje->nombre = $request->nombre;
        $viaje->descripcion = $request->descripcion;
        $viaje->estado = 'planeado'; // porque es desde el modal de planeados
        $viaje->save();

        return response()->json(['mensaje' => 'Viaje guardado']);
    }
}
