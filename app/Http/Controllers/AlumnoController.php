<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use Illuminate\Http\Request;
use App\Imports\AlumnoImport;
use Maatwebsite\Excel\Facades\Excel;

class AlumnoController extends Controller
{


    public function index()
    {
        $alumno = Alumno::get();

        return view('alumno.alumno',['alumnos'=>$alumno]);
    }


    public function import(Request $request){

        $request->validate([
        'excel_file' =>'required|mimes::xls,xlsx,csv'

        ]);
        Excel::import(new AlumnoImport, $request->file('excel_file')); ///mandamos el archivo a importar
        return redirect()->back()->with('success', 'Importado todo bien !');

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
