<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsUser
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Closure|RedirectResponse|Response
  {
    if (Auth::check())
    {
      if ($request->user()->isUser()) {
        return redirect()->route('dashboard');
      }
    
      return $next($request);
    }

    abort(403); // permission denied error
  }
}