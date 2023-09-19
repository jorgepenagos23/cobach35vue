<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


///definir rutas del sistema basicas puras GET


Route::get('/login',[UsuarioController::class,'login'])->name('login');

Route::middleware(['auth'])->group(function () {


    Route::get('/listar_alumno', [AlumnoController::class, 'index'])->name('listarAlumno');
    Route::post('/subir_alumno', [AlumnoController::class, 'import'])->name('import');

    Route::get('/secciones',[SeccionController::class,'secciones'])->name('secciones');



    Route::get('/dashboard', [UsuarioController::class, 'dashboard'])->name('dashboard');
    Route::get('/listarAlumno2', [UsuarioController::class, 'index']);
    Route::get('/inicio', function () {  return view('inicio'); });





});    Route::get('/', [PublicacionController::class, 'index'])->name('publicaciones.index');



Route::get('/getseccionesAPI',[SeccionController::class,'getseccionesAPI'])->name('getseccionesAPI');

Route::get('/secciones', [SeccionController::class, 'secciones'])->name('secciones');

Route::get('/banner', [SeccionController::class, 'secciones'])->name('banner');

Route::get('/crudsecciones', [SeccionController::class, 'crudsecciones'])->name('crudsecciones');



Route::get('/inicio-alumno', [UsuarioController::class, 'index'])->name('inicio-alumno');


Route::get('/getseccionesPublicAPI', [PublicacionController::class, 'getseccionesAPI'])->name('getseccionesPublicAPI');
Route::get('/publicaciones', [PublicacionController::class, 'index'])->name('publicaciones.index');


Route::POST ('/logout',[UsuarioController::class,'cerrar_sesion'])->name('logout');
Route::POST('/authenticate',[UsuarioController::class,'authenticate'])->name('/authenticate')->middleware('web');;


