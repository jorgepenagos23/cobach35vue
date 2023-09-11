<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


///definir rutas del sistema basicas puras GET

Route::get('/publicaciones', function () { return view('publicaciones'); })->name('publicaciones');


Route::get('/banner', function () { return view('.banner');});

Route::get('/inicio', function () {  return view('inicio'); });

Route::get('/listar_alumno',[AlumnoController::class,'index'])->name('listarAlumno');
Route::post('/subir_alumno',[AlumnoController::class,'import'])->name('import');

Route::get('/secciones',[SeccionController::class,'secciones'])->name('secciones');



///ruta basica   get y POST PARA LOGIN
Route::get('/login',[UsuarioController::class,'login'])->name('login');
Route::get('/listarAlumno2', [UsuarioController::class, 'index']);
Route::get('/dashboard',[UsuarioController::class,'dashboard'])->name('dashboard');


Route::POST('/authenticate',[UsuarioController::class,'authenticate'])->name('/authenticate')->middleware('web');;

