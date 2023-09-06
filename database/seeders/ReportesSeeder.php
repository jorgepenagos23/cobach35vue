<?php

namespace Database\Seeders;

use App\Models\Reportes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ReportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reporte = new Reportes();
        $reporte->nombre ='Ausencia de Clases';
        $reporte->save();


        $reporte = new Reportes();
        $reporte->nombre ='Cita Padre de Familia';
        $reporte->save();


        $reporte = new Reportes();
        $reporte->nombre ='Mal comportamiento';
        $reporte->save();


    }
}
