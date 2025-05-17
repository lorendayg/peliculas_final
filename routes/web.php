<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Página de inicio pública
Route::get('/', [CatalogoController::class, 'inicio'])->name('inicio');

// Rutas públicas
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/registro', function () {
    return view('registro');
})->name('registro');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');

// Rutas protegidas (solo accesibles si el usuario ha iniciado sesión)
Route::middleware('auth')->group(function () {
    Route::get('/peliculas', [CatalogoController::class, 'listado'])->name('peliculas.index');
    Route::get('/peliculas/agregar', [CatalogoController::class, 'agregar'])->name('peliculas.agregar');
    Route::post('/peliculas', [CatalogoController::class, 'guardar'])->name('peliculas.guardar');
    Route::get('/peliculas/{id}/editar', [CatalogoController::class, 'editar'])->name('peliculas.editar');
    Route::put('/peliculas/{id}', [CatalogoController::class, 'actualizar'])->name('peliculas.actualizar');
    Route::delete('/peliculas/{id}', [CatalogoController::class, 'eliminar'])->name('peliculas.eliminar');

    // Cierre de sesión
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});






