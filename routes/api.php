<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();


});



///ruta api resource para el sistema general
Route::apiResource('v1/secciones', SeccionController::class);

Route::apiResource('v1/usuarios', UsuarioController::class);


Route::apiResource('v1/alumnos',AlumnoController::class);










/// rutas get  se pueden borrar preferi conservarlas
Route::get('secciones',[ApiController::class,'getSeccionesAPi']);

Route::get('roles',[ApiController::class,'getRoles']);
Route::get('permisos',[ApiController::class,'getPermisos']);

Route::get('usuarios',[ApiController::class,'getusuariosAPI']);

Route::get('reportes',[ApiController::class,'getReportesAPI']);

Route::get('publicaciones',[ApiController::class,'getPublicacionesAPI']);

Route::get('alumnos',[ApiController::class,'getAlumnosAPI']);

Route::get('alumnos-reportes',[ApiController::class,'getAlumnosReporteAPI']);

