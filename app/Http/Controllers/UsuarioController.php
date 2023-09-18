<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Alumno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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
        $alumno = Alumno::get();

        return view('alumno.alumno',['alumnos'=>$alumno]);

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
    public function store(StoreUsuarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
