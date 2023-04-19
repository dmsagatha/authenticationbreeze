<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function adminHome()
  {
    $users = User::orderBy('name')->get();

    return view('adminHome', compact('users'));
  }
}