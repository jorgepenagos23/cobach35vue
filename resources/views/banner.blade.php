
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link href="{{ mix('resources/css/dashboard.css') }}" rel="stylesheet">
<link href="/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

<header>

    <nav class="navbar navbar-expand-lg navbar-yellow bg-dark" data-secciones="{{ json_encode($secciones) }}">
        <div class="container mx-auto px-4 py-2">
        <ul class="flex items-center justify-between space-x-4">
            @foreach ($secciones as $seccion)
                @if ($seccion->tipo === 'seccion')
                    <li class="relative group">
                        <a class="hover:text-blue-500 {{ $seccion->nombre === 'Alumnos' ? 'cursor-pointer' : '' }}"
                           aria-haspopup="true" @click.prevent="toggleSubMenu('{{ $seccion->id }}')">
                            {{ $seccion->nombre }}
                        </a>
                        <ul class="submenu absolute hidden left-0 mt-2 space-y-1 bg-dark text-black group-hover:block"
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
</header>
