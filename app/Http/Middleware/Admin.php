<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Check if user is authenticated and is an admin
         if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'شما دسترسی به این بخش را ندارید.');
        }
        return $next($request);
    }
}