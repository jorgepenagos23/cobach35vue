<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\AlumnoReporte;
use App\Models\Permiso;
use App\Models\Publicacion;
use App\Models\Reporte;
use App\Models\Rol;
use App\Models\Seccion;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Http\Response;

class ApiController extends Controller
{

    public function getusuariosAPI(){


        $usuario =  Usuario::all(); /// Obtener todos los usuarios


        return  response()->json(['usuarios'=> $usuario],Response::HTTP_OK);


    }

    public function getReportesAPI(){


        $reporte=  Reporte::all(); /// Obtener todos los reportes


        return  response()->json(['reportes'=> $reporte],Response::HTTP_OK);


    }
    public function getPermisos(){


        $permiso=  Permiso::all(); /// Obtener todos los reportes


        return  response()->json(['permisos'=> $permiso],Response::HTTP_OK);


    }

    public function getPublicacionesAPI(){


        $publicacion=  Publicacion::all(); /// Obtener todos las publicaciones


        return  response()->json(['publicaciones'=> $publicacion],Response::HTTP_OK);


    }

    public function getAlumnosAPI(){


        $alumno=  Alumno::all(); /// Obtener todos los alumnos


        return  response()->json(['alumnos'=> $alumno],Response::HTTP_OK);


    }

    public function getAlumnosReporteAPI(){


        $alumnoReporte=  AlumnoReporte::all(); /// Obtener todos los alumnos con reportes


        return  response()->json(['alumnoReportes'=> $alumnoReporte],Response::HTTP_OK);


    }
    public function getSeccionesAPi(){


        $secciones=  Seccion::all(); /// Obtener todos los secciones


        return  response()->json(['secciones'=> $secciones],Response::HTTP_OK);


    }

    public function getRoles(){


        $roles=  Rol::all(); /// Obtener todos los roles


        return  response()->json(['roles'=> $roles],Response::HTTP_OK);


    }





    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
