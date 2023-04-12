<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
  /**
   * Display the login view.
   */
  public function create(): View
  {
    return view('auth.login');
  }

  /**
   * Handle an incoming authentication request.
   */
  public function store(LoginRequest $request): RedirectResponse
  {
    $request->authenticate();

    $request->session()->regenerate();

    /* return redirect()->intended(RouteServiceProvider::HOME); */
    
    if (Auth::check()) {
      if (auth()->user()->type == 'admin') {
        return redirect()->route('admin.home');
      } else if (auth()->user()->type == 'manager') {
        return redirect()->route('manager.home');
      } else{
        return redirect()->route('home');
      }
    } else {
      return to_route('login')
        ->with(['error' => 'Correo electrónico y/o Contraseña son incorrectos!']);
    }
  }

  /**
   * Destroy an authenticated session.
   */
  public function destroy(Request $request): RedirectResponse
  {
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
