<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Alumno extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'alumnos';

    protected $fillable = [
        'clacentro'     ,
        'nombreplan'   ,
        'clavemuni'     ,
        'clavelocal'    ,
        'matricula'     ,
        'nombres'       ,
        'papellido'  ,
        'sapellido'     ,
        'curp'         ,
        'telcasa'      ,
        'nacionalidad'  ,
        'foliosec'      ,
        'correo'       ,
        'celular'        ,
        'grado'         ,
        'grupo'         ,
        'estatus'       ,


    ];

        //pendiente agregar relacion con boletas

    //agregar  la relacion de alumno con reportes

    public function Reportes()
    {
        return $this->hasMany(Reporte::class);
    }





}
