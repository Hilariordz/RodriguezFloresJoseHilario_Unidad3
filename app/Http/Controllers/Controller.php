<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destino;

abstract class Controller
{
    /**
     * Estadísticas rápidas para el panel admin
     */
    public static function estadisticasAdmin()
    {
        return [
            'usuarios' => User::count(),
            'destinos' => Destino::count(),
        ];
    }

    /**
     * Devuelve la vista del dashboard admin con estadísticas
     */
    public static function adminDashboardView()
    {
        $estadisticas = self::estadisticasAdmin();
        return view('admin.dashboard', compact('estadisticas'));
    }
}
