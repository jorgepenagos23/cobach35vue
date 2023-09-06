<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publicaciones;
class PublicacionesSeeder extends Seeder
{
    protected $priority = 7;

    public function run(): void
    {
        $publicacion = new Publicaciones();
        $publicacion->usuario_id = '1';
        $publicacion->nombre = "Publicación 1";
        $publicacion->fecha = now(); // Fecha actual
        $publicacion->save();



    }
}
