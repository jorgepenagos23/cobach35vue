<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Notifications\Notifiable;
class Publicacion extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'publicaciones';

    protected $fillable = [

        'id',
        'usuario_id',
        'nombre',
        'fecha'

    ];

    public function Publicaciones()
    {
        return $this->belongsTo(usuarios_has_roles::class);
    }


}
