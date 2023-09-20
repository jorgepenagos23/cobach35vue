<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Alumno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    public function authenticate(Request $request)
    {
        // Crear una cookie con el identificador de sesión del usuario
        $credentials = $request->only('correo',  'password');

        if (Auth::guard('web')->attempt($credentials)) {
            // Autenticación exitosa para el cliente
            return response()->json([
                'message' => 'Inicio de sesión exitoso',
                'redirect' => route('dashboard'), ], 200);



        }
        // Credenciales inválidas
        return response()->json(['message' => 'Credenciales inválidas'], 401);
    }


    public function dashboard()
    {
        return view('sistema.dashboard');
    }


    public function cerrar_sesion()
    {
        Auth::logout();
        return redirect('login');
    }


    public function login()
    {
        return view('login');
    }



    public function index()
    {

        return Usuario::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $inputs = $request->input();

        $inputs["password"] = Hash::make(trim($request->password));
        $respuesta = Usuario::create($inputs);

        return response()->json([

            'data' => $respuesta,
            'mensaje' => "guardado ",

        ]);
    }


    public function show( $id)
    {


        $seccion = Usuario::find($id);

        if(isset($seccion)){

            return response()->json([

            'data' => $seccion,
            'mensaje' => " encontrada con exito  "

            ]);
        }else{


            return response()->json([

                'error'=>true,
                'mesnsaje'=>"No existe esa ",

            ]);
        }
    }


    public function edit(Usuario $usuario)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $seccion = Usuario::find($id);

                if( isset($seccion)){

                    $seccion->correo = $request->correo;
                    $seccion->password = Hash::make($request->password);


                    if( $seccion->save()){

                        return response()->json([

                            'data' => $seccion,
                            'mensaje' => " actulizada con exito ",
                        ]);
                    }else{

                        return response()->json([
                            'error'=>true,
                            'mesnsaje'=>"No se actualizo  esa ",
                        ]);

                    }
                }else{

                    return response()->json([
                        'error'=>true,
                        'mesnsaje'=>"No existe  ",
                    ]);

                }
    }


    public function destroy( $id)
    {

        $seccion = Usuario::find($id);

        if( isset($seccion)){

            $resp = Usuario::destroy($id);
            if($resp){

                return response()->json([
                    'data'=>$seccion,
                    'mesnsaje'=>"se borro  exitosamente",
                ]);
            }else{
                return response()->json([
                    'data'=>$seccion,
                    'mesnsaje'=>"la  no existe",
                ]);

            }

        }else{

                return response()->json([
                    'error'=>true,
                    'mesnsaje'=>"la  no existe",
                ]);

            }
    }
}
