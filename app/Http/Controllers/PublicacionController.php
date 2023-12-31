<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Http\Requests\StorePublicacionRequest;
use App\Http\Requests\UpdatePublicacionRequest;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = Publicacion::all(); // Esto es un ejemplo; reemplázalo con la lógica adecuada

        // Luego, puedes retornar la vista "publicaciones" con los datos necesarios
        return view('publicaciones', ['publicaciones' => $publicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicacionRequest $request)
    {
        //
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
