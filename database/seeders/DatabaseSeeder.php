<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Seccion;
use App\Models\AlumnoReporte;
use App\Models\Usuario;
use App\Models\Reporte;
use App\Models\Permiso;
use App\Models\Publicacion;
use App\Models\Rol;
use App\Models\UsuarioHasRol;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {


        ///alumnos
        $alumno = new Alumno();
        $alumno->matricula = 'M12345'; // Asigna la matrícula correspondiente
        $alumno->clacentro = '07ECB0043I';
        $alumno->nombreplan = 'PLANTEL 35 " TUXTLA  NORTE ';
        $alumno->clavemuni = 'M7654';
        $alumno->clavelocal = 'L7890';
        $alumno->correo = 'pedro@cobach.edu.mx';
        $alumno->nombres = 'Pedro';
        $alumno->papellido = 'López';
        $alumno->sapellido = 'Gómez';
        $alumno->curp = 'LOPG987654ABCXYZ';
        $alumno->telcasa = '555-678-9012';
        $alumno->nacionalidad = 'Mexicana';
        $alumno->foliosec = 'F9876543210';
        $alumno->grado = '10';
        $alumno->grupo = 'B';
        $alumno->estatus = 'Activo';
        $alumno->celular = '555-876-5432';
        $alumno->save();

            // Registro 1
            $alumno = new Alumno();
            $alumno->matricula = 'J182300'; // Asigna la matrícula correspondiente
            $alumno->clacentro = 'C54321';
            $alumno->nombreplan = 'PLANTEL 35 " TUXTLA  NORTE ';
            $alumno->clavemuni = 'M9876';
            $alumno->clavelocal = 'L1234';
            $alumno->correo = 'juan@cobach.edu.mx';
            $alumno->nombres = 'Juan';
            $alumno->papellido = 'Pérez';
            $alumno->sapellido = 'López';
            $alumno->curp = 'PELJ987654ABCXYZ';
            $alumno->telcasa = '555-234-5678';
            $alumno->nacionalidad = 'Mexicana';
            $alumno->foliosec = 'F123456789';
            $alumno->grado = '11';
            $alumno->grupo = 'C';
            $alumno->estatus = 'Activo';
            $alumno->celular = '555-876-5432';
            $alumno->save();

            // Registro 2
            $alumno = new Alumno();
            $alumno->matricula = 'L193123'; // Asigna la matrícula correspondiente
            $alumno->clacentro = 'C67890';
            $alumno->nombreplan = 'PLANTEL 35 " TUXTLA  NORTE ';
            $alumno->clavemuni = 'M5432';
            $alumno->clavelocal = 'L9876';
            $alumno->correo = 'laura@cobach.edu.mx';
            $alumno->nombres = 'Laura';
            $alumno->papellido = 'Gómez';
            $alumno->sapellido = 'Martínez';
            $alumno->curp = 'GOML987654ABCXYZ';
            $alumno->telcasa = '555-345-6789';
            $alumno->nacionalidad = 'Mexicana';
            $alumno->foliosec = 'F9876543210';
            $alumno->grado = '10';
            $alumno->grupo = 'B';
            $alumno->estatus = 'Activo';
            $alumno->celular = '555-765-4321';
            $alumno->save();

            // Registro 3
            $alumno = new Alumno();
            $alumno->matricula = 'c9813213'; // Asigna la matrícula correspondiente
            $alumno->clacentro = 'C24680';
            $alumno->nombreplan = 'PLANTEL 35 " TUXTLA  NORTE ';
            $alumno->clavemuni = 'M4321';
            $alumno->clavelocal = 'L5678';
            $alumno->correo = 'carlos@cobach.edu.mx';
            $alumno->nombres = 'Carlos';
            $alumno->papellido = 'Hernández';
            $alumno->sapellido = 'García';
            $alumno->curp = 'HERC987654ABCXYZ';
            $alumno->telcasa = '555-456-7890';
            $alumno->nacionalidad = 'Mexicana';
            $alumno->foliosec = 'F9876543210';
            $alumno->grado = '12';
            $alumno->grupo = 'A';
            $alumno->estatus = 'Activo';
            $alumno->celular = '555-654-3210';
            $alumno->save();

            // Registro 4
            $alumno = new Alumno();
            $alumno->matricula = 'AD90LSD0'; // Asigna la matrícula correspondiente
            $alumno->clacentro = 'C13579';
            $alumno->nombreplan = 'PLANTEL 35 " TUXTLA  NORTE ';
            $alumno->clavemuni = 'M8765';
            $alumno->clavelocal = 'L2345';
            $alumno->correo = 'ana@cobach.edu.mx';
            $alumno->nombres = 'Ana';
            $alumno->papellido = 'Ramírez';
            $alumno->sapellido = 'López';
            $alumno->curp = 'RAMA987654ABCXYZ';
            $alumno->telcasa = '555-567-8901';
            $alumno->nacionalidad = 'Mexicana';
            $alumno->foliosec = 'F1234567890';
            $alumno->grado = '11';
            $alumno->grupo = 'C';
            $alumno->estatus = 'Activo';
            $alumno->celular = '555-987-6543';
            $alumno->save();



        // Usuario 1
        $usuario = new Usuario();
        $usuario->correo = 'perezcobach@edu.mx';
        $usuario->password = Hash::make('contrasena1');
        $usuario->save();

        // Usuario 2
        $usuario = new Usuario();
        $usuario->correo = 'anacobach@edu.mx';
        $usuario->password = Hash::make('contrasena2');
        $usuario->save();

        // ... Repite esto para los otros usuarios

        // Usuario 3
        $usuario = new Usuario();
        $usuario->correo = 'jorgecobach@edu.mx';
        $usuario->password = Hash::make('contrasena10');
        $usuario->save();



            /// Reporte seeder
        $reporte = new Reporte();
        $reporte->nombre ='Ausencia de Clases';
        $reporte->save();


        $reporte = new Reporte();
        $reporte->nombre ='Cita Padre de Familia';
        $reporte->save();


        $reporte = new Reporte();
        $reporte->nombre ='Mal comportamiento';
        $reporte->save();


        $permiso = new Permiso();
        $permiso->nombre = 'Agregar Publicaciones al Banner'; //
        $permiso->guard_nombre = 'web'; //
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nombre = 'Eliminar Publicaciones'; //
        $permiso->guard_nombre = 'web'; //
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nombre = 'Editar Publicaciones'; //
        $permiso->guard_nombre = 'web'; //
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nombre = 'Ver alumnos'; //
        $permiso->guard_nombre = 'web'; //
        $permiso->save();


        $rol = new Rol();
        $rol->nombre = 'Director';
        $rol->guard_nombre = 'web';
        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Subdirector';
        $rol->guard_nombre = 'web';
        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Administrador';
        $rol->guard_nombre = 'web';
        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Orientadora';
        $rol->guard_nombre = 'web';
        $rol->save();

        $rol = new Rol();
        $rol->nombre = 'Alumno';
        $rol->guard_nombre = 'web';
        $rol->save();

         // Usuario 1 tiene el rol 1 (ejemplo)
         $usuarioRol = new UsuarioHasRol();
         $usuarioRol->usuario_id = 1; //
         $usuarioRol->matricula = 'M12345'; //
         $usuarioRol->rol_id = 5; // ESTUDIANTE
         $usuarioRol->save();


   // Usuario 2 tiene el rol 3 (ADMINISTRADOR) sin matrícula
         $usuarioRol2 = new UsuarioHasRol();
         $usuarioRol2->usuario_id = 2; ///ANACOBACH ES ADMIN
         $usuarioRol2->rol_id = 3;
         $usuarioRol2->save();


         //// Publicacion
         $publicacion = new Publicacion();
         $publicacion->usuario_id = '1';
         $publicacion->nombre = "Publicación  NOTICIA 1 REGRESO A CLASES";
         $publicacion->fecha = now(); // Fecha actual
         $publicacion->save();


         /// Reporte Alumno


        $reportealumno = new AlumnoReporte();
        $reportealumno->descripcion=' el alumno viene muy tarde a sus clases ';
        $reportealumno->fecha = now(); // Asigna la fecha y hora actual a la propiedad 'fecha'
        $reportealumno->usuario_id ='2';
        $reportealumno->reporte_id ='1';
        $reportealumno->save();

        $seccion = new Seccion();
        $seccion->orden_presentacion = 1;
        $seccion->nombre = 'Inicio ';
        $seccion->visible = true;
        $seccion->seccion_id = 1; // Asignar el ID de la sección padre
        $seccion->objetivo = 'Este es el contenido de la Sección 1';
        $seccion->tipo = 'contenido';
        $seccion->save();



        $seccion = new Seccion();
        $seccion->orden_presentacion = 2;
        $seccion->nombre = 'Noticias ';
        $seccion->visible = true;
        $seccion->seccion_id = 1; // Asignar el ID de la sección padre
        $seccion->objetivo = 'Este es el contenido de la Sección 2';
        $seccion->tipo = 'contenido';
        $seccion->save();


        $seccion = new Seccion();
        $seccion->orden_presentacion = 3;
        $seccion->nombre = 'Alumnos ';
        $seccion->visible = true;
        $seccion->seccion_id = 1; // Asignar el ID de la sección padre
        $seccion->objetivo = 'Este es el contenido de la Sección 3 ';
        $seccion->tipo = 'contenido';
        $seccion->save();

        $seccion = new Seccion();

        $seccion->nombre = 'Cuadro de Honor ';
        $seccion->visible = true;
        $seccion->seccion_id = 3; // Asignar el ID de la sección padre
        $seccion->objetivo = 'Cuadro de Honor QUINTO GRADO  ';
        $seccion->tipo = 'subseccion';
        $seccion->save();





    }
}
