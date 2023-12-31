<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Notifications\Notifiable;
class usuarios_has_roles extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'usuario_has_roles';

    protected $fillable = [

        'id',
        'usuario_id',
        'matricula',
        'rol_id'


    ];

    //agregar  la relacion de usuario con la publicacion

    public function Publicaciones()
{
    return $this->hasMany(Publicaciones::class);
}





}
