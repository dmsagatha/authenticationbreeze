<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index(Request $request)
  {
    return view('admin.user');
  }

  public function handleAdmin()
  {
    return view('admin.index');
  }   
}