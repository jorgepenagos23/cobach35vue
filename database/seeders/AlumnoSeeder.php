<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // Alumno 1
    $alumno = new Alumno();
    $alumno->nombre = 'María García';
    $alumno->matricula = 'L192837465';
    $alumno->semestre = '4';
    $alumno->grupo = 'B';
    $alumno->estatus = 'Activo';
    $alumno->telefono = '555-123-4567';
    $alumno->tutor_nombre = 'Juan García';
    $alumno->tutor_telefono = '555-987-6543';
    $alumno->foto = 'maria_garcia.jpg';
    $alumno->save();

    // Alumno 2
    $alumno = new Alumno();
    $alumno->nombre = 'Carlos López';
    $alumno->matricula = 'L283746519';
    $alumno->semestre = '2';
    $alumno->grupo = 'A';
    $alumno->estatus = 'Activo';
    $alumno->telefono = '555-234-5678';
    $alumno->tutor_nombre = 'Ana López';
    $alumno->tutor_telefono = '555-876-5432';
    $alumno->foto = 'carlos_lopez.jpg';
    $alumno->save();

    // Alumno 3
    $alumno = new Alumno();
    $alumno->nombre = 'Laura Rodríguez';
    $alumno->matricula = 'L374651928';
    $alumno->semestre = '3';
    $alumno->grupo = 'C';
    $alumno->estatus = 'Activo';
    $alumno->telefono = '555-345-6789';
    $alumno->tutor_nombre = 'Pedro Rodríguez';
    $alumno->tutor_telefono = '555-765-4321';
    $alumno->foto = 'laura_rodriguez.jpg';
    $alumno->save();

    // Alumno 4
    $alumno = new Alumno();
    $alumno->nombre = 'Juan Pérez';
    $alumno->matricula = 'L923891203';
    $alumno->semestre = '3';
    $alumno->grupo = 'A';
    $alumno->estatus = 'Activo';
    $alumno->telefono = '1234567Ff890';
    $alumno->tutor_nombre = 'María Pérez';
    $alumno->tutor_telefono = '9876543210';
    $alumno->foto = 'ruta_de_la_foto1.jpg';
    $alumno->save();

    // Alumno 5
    $alumno = new Alumno();
    $alumno->nombre = 'Ana Ramírez';
    $alumno->matricula = 'L124567890';
    $alumno->semestre = '1';
    $alumno->grupo = 'B';
    $alumno->estatus = 'Activo';
    $alumno->telefono = '555-567-8901';
    $alumno->tutor_nombre = 'Luis Ramírez';
    $alumno->tutor_telefono = '555-890-1234';
    $alumno->foto = 'ana_ramirez.jpg';
    $alumno->save();


    }
}
