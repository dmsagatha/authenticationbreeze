<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('home');
  }

  public function adminHome()
  {
    $users = User::orderBy('name')->get();

    return view('adminHome', compact('users'));
  }
  
  public function managerHome()
  {
    return view('managerHome');
  }
}