<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Reporte extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'reportes';

    protected $fillable = [

        'id',
        'nombre',


    ];

    //agregar  la relacion  uno a muchos
    public function Reportes()
    {

        return $this->hasMany(Reporte::class);
    }




}
