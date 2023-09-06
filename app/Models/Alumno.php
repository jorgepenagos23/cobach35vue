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

        'id',
        'nombre',
        'matricula',
        'semestre',
        'grupo',
        'telefono',
        'tutor_nombre',
        'tutor_telefono',
        'foto',

    ];

        //pendiente agregar relacion con boletas

    //agregar  la relacion de alumno con reportes

    public function Reportes()
    {
        return $this->hasMany(Reporte::class);
    }




}
