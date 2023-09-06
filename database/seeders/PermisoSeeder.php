<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Permiso;

class PermisoSeeder extends Seeder
{

    public function run(): void
    {
        $permiso = new Permiso();
        $permiso->nombre = 'Agregar Publicaciones al Banner'; //
        $permiso->guard_nombre = 'web'; //
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nombre = 'Eliminar Publicaciones'; //
        $permiso->guard_nombre = 'web'; //
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nombre = 'Editar Publicaciones'; //
        $permiso->guard_nombre = 'web'; //
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nombre = 'Ver alumnos'; //
        $permiso->guard_nombre = 'web'; //
        $permiso->save();

    }
}
