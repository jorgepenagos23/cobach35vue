<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


///definir rutas del sistema basicas puras GET


Route::get('/login',[UsuarioController::class,'login'])->name('login');
Route::middleware(['auth'])->group(function () {


    Route::get('/listar_alumno', [AlumnoController::class, 'index2'])->name('listarAlumno');
    Route::post('/subir_alumno', [AlumnoController::class, 'import'])->name('import');

    Route::get('/secciones',[SeccionController::class,'secciones'])->name('secciones');



    Route::get('/dashboard', [UsuarioController::class, 'dashboard'])->name('dashboard');
    Route::get('/listarAlumno2', [UsuarioController::class, 'index']);




    Route::POST ('/logout',[UsuarioController::class,'cerrar_sesion'])->name('logout');

});



//Route::get('/publicaciones', [PublicacionController::class, 'index'])->name('publicaciones.index');
Route::get('/', [SeccionController::class, 'index2'])->name('inicio');



Route::get('/getseccionesAPI',[SeccionController::class,'getseccionesAPI'])->name('getseccionesAPI');

Route::get('/secciones', [SeccionController::class, 'secciones'])->name('secciones');

Route::get('/banner', [SeccionController::class, 'secciones'])->name('banner');

Route::get('/MostrarSeccion', [SeccionController::class, 'MostrarSeccion'])->name('MostrarSeccion');



Route::get('/inicio-alumno', [AlumnoController::class, 'index2'])->name('inicio-alumno'); // esta ruta pasarla alumno controller


Route::get('/getseccionesPublicAPI', [PublicacionController::class, 'getseccionesAPI'])->name('getseccionesPublicAPI');
Route::get('/publicaciones', [PublicacionController::class, 'index'])->name('publicaciones.index');


Route::POST('/authenticate',[UsuarioController::class,'authenticate'])->name('/authenticate')->middleware('web');;


Route::get('/{any}', function () { return redirect('/');})->where('any', '.*');
