
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link href="{{ mix('resources/css/dashboard.css') }}" rel="stylesheet">
<link href="/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

<!-- Banner -->
<div class="bg-blue-900 p-4 text-white">
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
                        <a class="hover:text-blue-500 {{ $seccion->nombre === 'Alumnos' ? 'cursor-pointer' : '' }}"
                           aria-haspopup="true" @click.prevent="toggleSubMenu('{{ $seccion->id }}')">
                            {{ $seccion->nombre }}
                        </a>
                        <ul class="submenu absolute hidden left-0 mt-2 space-y-1 bg-white text-black group-hover:block"
                            x-show="openSubMenus.includes('{{ $seccion->id }}')" @click.away="closeSubMenus">
                            @foreach ($secciones as $subseccion)
                                @if ($subseccion->tipo === 'subseccion' && $subseccion->seccion_id === $seccion->id)
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-blue-400"
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
