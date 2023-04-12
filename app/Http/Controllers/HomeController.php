<?php

namespace App\Http\Controllers;

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
    return view('adminHome');
  }
  
  public function managerHome()
  {
    return view('managerHome');
  }
}