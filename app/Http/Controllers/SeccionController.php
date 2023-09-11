<?php

namespace App\Http\Controllers;

use App\Models\Seccion;
use App\Http\Requests\StoreSeccionRequest;
use App\Http\Requests\UpdateSeccionRequest;

class SeccionController extends Controller
{
    public function secciones(){

        $secciones = Seccion::all(); // Obtener todas las secciones

            return view('seccion.seccion',['secciones'=>$secciones]);

        }
    public function index()
    {
        //
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
    public function store(StoreSeccionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seccion $seccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seccion $seccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeccionRequest $request, Seccion $seccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seccion $seccion)
    {
        //
    }
}
