<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str; // para usar Str::contains()

class BusquedaController extends Controller
{
    // Método para búsqueda AJAX
    public function buscarAjax(Request $request)
    {
        $destino = strtolower($request->input('destino'));
        $fechas = $request->input('fechas');
        $huespedes = $request->input('huespedes');
        $vuelo = $request->boolean('vuelo');
        $auto = $request->boolean('auto');

        $jsonPath = public_path('json/vuelos.json');
        if (!file_exists($jsonPath)) {
            return response()->json(['error' => 'Archivo de vuelos no encontrado.'], 404);
        }

        $jsonData = json_decode(file_get_contents($jsonPath), true);

        $resultados = collect($jsonData)->filter(function ($item) use ($destino) {
            // Asegura que 'destino' exista en $item para evitar errores
            return isset($item['destino']) && Str::contains(strtolower($item['destino']), $destino);
        })->values();

        return response()->json([
            'resultados' => $resultados,
            'fechas' => $fechas,
            'huespedes' => $huespedes,
            'vuelo' => $vuelo,
            'auto' => $auto,
        ]);
    }
}
