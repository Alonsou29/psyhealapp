<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Redireccion
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            // Determina el rol del usuario y redirige según corresponda
            if (Auth::user()->hasRole('psicologo')) {
                return redirect()->route('panelPs');
            } elseif (Auth::user()->hasRole('paciente')) {
                return redirect()->route('panelPaciente');
            }
        }

        // Si el usuario no está autenticado, o no tiene un rol válido, continúa con la solicitud
        return $next($request);
    }
}
