<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\usuarios_has_roles;

class UsuariosHasRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuario 1 tiene el rol 1 (ejemplo)
        $usuarioRol = new usuarios_has_roles();
        $usuarioRol->usuario_id = 1; // director
        $usuarioRol->rol_id = 1; // Reemplaza con el ID del rol que deseas asignar
        $usuarioRol->save();

        // Repite esto para asignar más roles a otros usuarios según sea necesario

        // Usuario 2 tiene el rol 2 (ejemplo)
        $usuarioRol = new usuarios_has_roles();
        $usuarioRol->usuario_id = 2; //
        $usuarioRol->rol_id = 2; //
        $usuarioRol->save();

         // Usuario 2 tiene el rol 2 (ejemplo)
         $usuarioRol = new usuarios_has_roles();
         $usuarioRol->usuario_id = 3; //  penagos
         $usuarioRol->rol_id = 3; // adminastrador
         $usuarioRol->save();
    }
}
