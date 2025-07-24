<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string|null ...$guards): Response
    {
        if (Auth::check()) {
            $role = Auth::user()->role;

            return match ($role) {
                'admin' => redirect('/admin'),
                'panitia' => redirect('/panitia'),
                'siswa' => redirect('/siswa'),
                default => abort(403),
            };
        }

        return $next($request);
    }
}
