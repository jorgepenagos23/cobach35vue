<?php

namespace App\Http\Controllers;

use App\Models\Seccion;
use App\Http\Requests\StoreSeccionRequest;
use App\Http\Requests\UpdateSeccionRequest;

class SeccionController extends Controller
{
    public function secciones(){

        $secciones = Seccion::all(); // Obtener todas las secciones

        return view('seccion.seccion', ['secciones' => $secciones])->with('banner', $secciones); // Puedes agregar más vistas y datos aquí si es necesario

        }


        public function getseccionesAPI(){

            $seccionesJson = Seccion::all(); // Obtener todas las secciones

            return response()->json(['secciones' => $seccionesJson]);

            }

            public function crudsecciones(){

                $secciones = Seccion::all(); // Obtener todas las secciones

                return view('CRUD.crudsecciones', ['secciones' => $secciones])->with('banner', $secciones); // Puedes agregar más vistas y datos aquí si es necesario

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
