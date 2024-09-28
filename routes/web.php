<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

// Agrupar rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Rutas para la gestión de tours
    Route::resource('tours', TourController::class);

    // Ruta para el perfil de usuario
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');

    // Ruta para el panel de administración (solo accesible para usuarios con rol de admin)
    Route::get('admin', [AdminController::class, 'index'])->name('admin')->middleware('role:admin');
});

// Rutas de autenticación
Auth::routes();

// Ruta de redirección después de iniciar sesión
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
