<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Roles extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'roles_tabla';

    protected $fillable = [

        'id',
        'name',
        'guard_nombre',


    ];

        //pendiente agregar

    //agregar relacion con usuario  has roles


}
