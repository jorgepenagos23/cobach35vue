<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Http\Requests\StorePublicacionRequest;
use App\Http\Requests\UpdatePublicacionRequest;
use App\Models\Seccion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = Publicacion::all(); // Esto es un ejemplo; reemplázalo con la lógica adecuada
        $secciones = Seccion::all();
        // Luego, puedes retornar la vista "publicaciones" con los datos necesarios
        return view('publicaciones', ['publicaciones' => $publicaciones,'secciones' => $secciones]);
    }

    public function getseccionesAPI(){

        $secciones = Seccion::all(); // Obtener todas las secciones

        return response()->json(['secciones' => $secciones]);

        }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * VAMOS A CREAR UNA PUBLICACION
     */
    public function store(Request $request)
    {


        




    }

    /**
     * Display the specified resource.
     */
    public function show(Publicacion $publicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publicacion $publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicacionRequest $request, Publicacion $publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publicacion $publicacion)
    {
        //
    }
}
