<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;


///definir rutas del sistema basicas puras GET

Route::get('/publicaciones', function () { return view('publicaciones'); })->name('publicaciones');

Route::get('/login', function () { return view('login');});

Route::get('/banner', function () { return view('.banner');});

Route::get('/inicio', function () {  return view('inicio'); });

Route::get('/listar_alumno',[AlumnoController::class,'index'])->name('listarAlumno');
Route::post('/subir_alumno',[AlumnoController::class,'import'])->name('import');
