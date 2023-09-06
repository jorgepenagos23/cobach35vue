<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\usuarios_has_roles;

class UsuariosHasRolesSeeder extends Seeder
{

    protected $priority = 6;

    public function run(): void
    {
        // Usuario 1 tiene el rol 1 (ejemplo)
        $usuarioRol = new usuarios_has_roles();
        $usuarioRol->usuario_id = 1; //
        $usuarioRol->matricula = 'L192837465'; //
        $usuarioRol->rol_id = 5; // ESTUDIANTE
        $usuarioRol->save();


  // Usuario 2 tiene el rol 3 (ADMINISTRADOR) sin matrícula
        $usuarioRol2 = new usuarios_has_roles();
        $usuarioRol2->usuario_id = 2; ///ANACOBACH ES ADMIN
        $usuarioRol2->rol_id = 3;
        $usuarioRol2->save();



    }
}
