<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});


Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('admin', [AdminController::class, 'handleAdmin'])->name('admin.index')->middleware('admin');



/* Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Route::group(['middleware' => ['auth', 'admin']], function () {
  Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
}); */

require __DIR__.'/auth.php';