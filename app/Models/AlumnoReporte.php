<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class AlumnoReporte extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'alumno_reportes';

    protected $fillable = [

        'id',
        'descripcion',
        'fecha',
        'usuario_id',
        'reporte_id'

    ];

        //pendiente agregar relacion con boletas


        public function Reportes()
        {
            return $this->belongsTo(Reporte::class, 'reporte_id');
        }



}
