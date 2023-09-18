
@extends('layouts.dash_app')
<link href="/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

 <!-- Banner -->
<div class="bg-blue-700 p-4 text-white">
    <div class="flex items-center">
        <img src="http://35tuxtlanorte.edu.mx/images/logo35.png" alt="Logo de tu empresa" class="w-20 h-12 mr-2">
        <h1 class="text-3xl font-bold">COBACH PLANTEL 35</h1>
    </div>
</div>
<nav class="bg-gray-800 text-white">
    <div class="container mx-auto px-4 py-2">
        <ul class="flex items-center justify-between space-x-4">
            @foreach ($secciones as $seccion)
                @if ($seccion->tipo === 'seccion')
                    <li class="relative group">
                        <a class="hover:text-blue-500 {{ $seccion->nombre === 'Alumnos' ? 'cursor-pointer' : '' }}" aria-haspopup="true">
                            {{ $seccion->nombre }}
                        </a>
                        <ul class="submenu absolute hidden left-0 mt-0 space-y-0 bg-white text-black group-hover:block">
                            @foreach ($secciones as $subseccion)
                                @if ($subseccion->tipo === 'subseccion' && $subseccion->seccion_id === $seccion->id)
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-blue-300"
                                           href="{{ route('publicaciones.index', ['id' => $subseccion->id]) }}">
                                            {{ $subseccion->nombre }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>
