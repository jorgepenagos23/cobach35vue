<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Permiso extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'permisos';

    protected $fillable = [

        'id',
        'nombre',
        'guard_nombre',

    ];

    //agregar  la relacion de permiosos con usuario has permisos


}
