<?php

use App\Http\Controllers\CatalogoController;

Route::get('/', [CatalogoController::class, 'inicio'])->name('inicio');
Route::get('/peliculas', [CatalogoController::class, 'listado'])->name('peliculas.index');
Route::get('/peliculas/agregar', [CatalogoController::class, 'agregar'])->name('peliculas.agregar');
Route::post('/peliculas', [CatalogoController::class, 'guardar'])->name('peliculas.guardar');
Route::get('/peliculas/{id}/editar', [CatalogoController::class, 'editar'])->name('peliculas.editar');
Route::put('/peliculas/{id}', [CatalogoController::class, 'actualizar'])->name('peliculas.actualizar');
Route::delete('/peliculas/{id}', [CatalogoController::class, 'eliminar'])->name('peliculas.eliminar');






