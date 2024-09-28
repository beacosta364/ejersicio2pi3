<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layouts.plantilla');
});

Route::get('/gestioninventarios', [ProductController::class, 'index'])->name('gestioninventarios');
Route::get('/gestionusuarios',[ProductController::class, 'agregar'])->name('gestionusuarios');
Route::get('/controlacceso',[ProductController::class,'acceso'])->name('controlacceso');

// Ruta tipo resource
Route::resource('categorias', CategoriaController::class);



// use Illuminate\Notifications\Notifiable;
 
// use HasRoles;
 