<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Usuarios extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'usuarios';

    protected $fillable = [

        'id',
        'correo',
        'rol',
        'password',
        'matricula_alumno'

    ];

        //pendiente agregar relacion con boletas

    //agregar  la relacion de alumno con reportes


}
