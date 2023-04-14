<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next, $userType): Response
  {
    // if(auth()->user()->type == $userType) {
    if(Auth::check() && Auth::user()->type == $userType) {
      return $next($request);
    }

    return response()->json(['No tiene permisos para acceder a esta página.']);
  }
}