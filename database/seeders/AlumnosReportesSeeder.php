<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\alumnos_reportes;

class AlumnosReportesSeeder extends Seeder
{

    public function run(): void
    {

        $reportealumno = new alumnos_reportes();
        $reportealumno->descripcion=' el alumno viene muy tarde a sus clases ';
        $reportealumno->fecha = now(); // Asigna la fecha y hora actual a la propiedad 'fecha'
        $reportealumno->usuario_id ='2';
        $reportealumno->reporte_id ='1';
        $reportealumno->save();


    }
}
