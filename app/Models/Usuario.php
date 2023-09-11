<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Elimina esta línea
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable; // Deja esta parte tal como está
    protected $table = 'usuarios';

    protected $fillable = [
        'id',
        'correo',
        'password',
    ];

    public function Publicaciones()
    {
        return $this->hasMany(Publicaciones::class);
    }
}
