<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      // Usuario 1
      $usuario = new Usuarios();
      $usuario->correo = 'perezcobach@edu.mx';
      $usuario->password = Hash::make('contrasena1');
      $usuario->save();

      // Usuario 2
      $usuario = new Usuarios();
      $usuario->correo = 'anacobach@edu.mx';
      $usuario->password = Hash::make('contrasena2');
      $usuario->save();

      // ... Repite esto para los otros usuarios

      // Usuario 10
      $usuario = new Usuarios();
      $usuario->correo = 'jorgecobach@edu.mx';
      $usuario->password = Hash::make('contrasena10');
      $usuario->save();

    }
}
