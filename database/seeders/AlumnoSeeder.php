<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    protected $priority = 1;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // Alumno 1
    $alumno = new Alumno();
    $alumno->correo = 'maria@cobach.edu.mx';
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
$alumno->correo = 'juan@cobach.edu.mx';
$alumno->nombre = 'Juan Rodríguez';
$alumno->matricula = 'L987654321';
$alumno->semestre = '3';
$alumno->grupo = 'A';
$alumno->estatus = 'Activo';
$alumno->telefono = '555-234-5678';
$alumno->tutor_nombre = 'María Rodríguez';
$alumno->tutor_telefono = '555-876-5432';
$alumno->foto = 'juan_rodriguez.jpg';
$alumno->save();

// Alumno 3
$alumno = new Alumno();
$alumno->correo = 'luis@cobach.edu.mx';
$alumno->nombre = 'Luis Pérez';
$alumno->matricula = 'L456789012';
$alumno->semestre = '5';
$alumno->grupo = 'C';
$alumno->estatus = 'Activo';
$alumno->telefono = '555-345-6789';
$alumno->tutor_nombre = 'Ana Pérez';
$alumno->tutor_telefono = '555-765-4321';
$alumno->foto = 'luis_perez.jpg';
$alumno->save();

// Alumno 4
$alumno = new Alumno();
$alumno->correo = 'andrea@cobach.edu.mx';
$alumno->nombre = 'Andrea López';
$alumno->matricula = 'L012345678';
$alumno->semestre = '2';
$alumno->grupo = 'D';
$alumno->estatus = 'Activo';
$alumno->telefono = '555-456-7890';
$alumno->tutor_nombre = 'Pedro López';
$alumno->tutor_telefono = '555-654-3210';
$alumno->foto = 'andrea_lopez.jpg';
$alumno->save();

// Alumno 5
$alumno = new Alumno();
$alumno->correo = 'carlos@cobach.edu.mx';
$alumno->nombre = 'Carlos Ramírez';
$alumno->matricula = 'L678901234';
$alumno->semestre = '4';
$alumno->grupo = 'A';
$alumno->estatus = 'Activo';
$alumno->telefono = '555-567-8901';
$alumno->tutor_nombre = 'Sofía Ramírez';
$alumno->tutor_telefono = '555-543-2109';
$alumno->foto = 'carlos_ramirez.jpg';
$alumno->save();

// Alumno 6
$alumno = new Alumno();
$alumno->correo = 'laura@cobach.edu.mx';
$alumno->nombre = 'Laura Martínez';
$alumno->matricula = 'L345678901';
$alumno->semestre = '6';
$alumno->grupo = 'B';
$alumno->estatus = 'Activo';
$alumno->telefono = '555-678-9012';
$alumno->tutor_nombre = 'Raúl Martínez';
$alumno->tutor_telefono = '555-432-1098';
$alumno->foto = 'laura_martinez.jpg';
$alumno->save();

// Alumno 7
$alumno = new Alumno();
$alumno->correo = 'pedro@cobach.edu.mx';
$alumno->nombre = 'Pedro Gómez';
$alumno->matricula = 'L567890123';
$alumno->semestre = '3';
$alumno->grupo = 'C';
$alumno->estatus = 'Activo';
$alumno->telefono = '555-789-0123';
$alumno->tutor_nombre = 'Isabel Gómez';
$alumno->tutor_telefono = '555-321-0987';
$alumno->foto = 'pedro_gomez.jpg';
$alumno->save();

// Alumno 8
$alumno = new Alumno();
$alumno->correo = 'ana@cobach.edu.mx';
$alumno->nombre = 'Ana Sánchez';
$alumno->matricula = 'L234567890';
$alumno->semestre = '5';
$alumno->grupo = 'D';
$alumno->estatus = 'Activo';
$alumno->telefono = '555-890-1234';
$alumno->tutor_nombre = 'Miguel Sánchez';
$alumno->tutor_telefono = '555-210-9876';
$alumno->foto = 'ana_sanchez.jpg';
$alumno->save();



    }
}
