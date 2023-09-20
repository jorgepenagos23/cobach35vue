<?php

namespace App\Http\Controllers;

use App\Models\Seccion;
use App\Http\Requests\StoreSeccionRequest;
use App\Http\Requests\UpdateSeccionRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;
use Illuminate\Http\Response;

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

            public function MostrarSeccion(){

                $secciones = Seccion::all(); // Obtener todas las secciones

                return view('CRUD.MostrarSeccion', ['secciones' => $secciones])->with('banner', $secciones); // Puedes agregar más vistas y datos aquí si es necesario

                }


            public function index()
            {

                $secciones=  Seccion::all(); /// Obtener todos los secciones


                return  response()->json(['secciones'=> $secciones],Response::HTTP_OK);
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
            public function store(Request $request)
            {

                $inputs = $request->input();

                $respuesta = Seccion::create($inputs);

                return response()->json([

                    'data' => $respuesta,
                    'mensaje' => "seccion actualizada exitosamente ",

                ]);

            }

            /**
             * Display the specified resource.
             */
            public function show( $id)
            {

                $seccion = Seccion::find($id);

                if(isset($seccion)){

                    return response()->json([

                    'data' => $seccion,
                    'mensaje' => "seccion encontrada con exito  "

                    ]);
                }else{


                    return response()->json([

                        'error'=>true,
                        'mesnsaje'=>"No existe esa seccion",

                    ]);
                }


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
            public function update(Request $request, $id)
            {
                $seccion = Seccion::find($id);
                if( isset($seccion)){

                    $seccion->nombre = $request->nombre;
                    $seccion->seccion_id = $request->seccion_id;
                    $seccion->tipo = $request->tipo;

                    $seccion->objetivo = $request->objetivo;

                    if( $seccion->save()){

                        return response()->json([

                            'data' => $seccion,
                            'mensaje' => "seccion actulizada con exito ",
                        ]);
                    }else{

                        return response()->json([
                            'error'=>true,
                            'mesnsaje'=>"No se actualizo  esa seccion",
                        ]);

                    }
                }else{

                    return response()->json([
                        'error'=>true,
                        'mesnsaje'=>"No existe esa seccion",
                    ]);

                }


            }


            public function destroy( $id)
            {

                $seccion = Seccion::find($id);

                if( isset($seccion)){

                    $resp = Seccion::destroy($id);
                    if($resp){

                        return response()->json([
                            'data'=>$seccion,
                            'mesnsaje'=>"se borro la seccion exitosamente",
                        ]);
                    }else{
                        return response()->json([
                            'data'=>$seccion,
                            'mesnsaje'=>"la seccion no existe",
                        ]);

                    }

                }else{

                        return response()->json([
                            'error'=>true,
                            'mesnsaje'=>"la seccion no existe",
                        ]);

                    }

            }
        }
