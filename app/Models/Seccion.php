<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Seccion extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'secciones';

    protected $fillable = [

        'id',
        'orden_presentacion',
        'nombre',
        'visible',
        'seccion_id',
        'objetivo',
        'tipo',



    ];

        //pendiente agregar

        public function subsecciones(){


            return $this->hasMany(Seccion::class, 'seccion_id');
        }
}
