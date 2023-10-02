<?php

namespace App\Http\Controllers;

use App\Models\AlumnoReporte;
use App\Http\Requests\StoreAlumnoReporteRequest;
use App\Http\Requests\UpdateAlumnoReporteRequest;

class AlumnoReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
        return AlumnoReporte::all();
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
    public function store(StoreAlumnoReporteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AlumnoReporte $alumnoReporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AlumnoReporte $alumnoReporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoReporteRequest $request, AlumnoReporte $alumnoReporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AlumnoReporte $alumnoReporte)
    {
        //
    }
}
