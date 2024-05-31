<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CargarMenuRol
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user->hasRole('psicologo')) {
            config(['adminlte.menu' => config('menus.menu_psicologo')]);
        } elseif ($user->hasRole('paciente')) {
            config(['adminlte.menu' => config('menus.menu_paciente')]);
        }

        return $next($request);
    }
}
