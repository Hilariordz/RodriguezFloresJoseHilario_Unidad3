<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgenteMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role === 'agente') {
            return $next($request);
        }
        abort(403, 'No tienes permisos de agente.');
    }
} 