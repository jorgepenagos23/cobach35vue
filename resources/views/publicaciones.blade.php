<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>

<!-- Agrega el enlace al archivo CSS compilado de Tailwind CSS -->
<link href="{{ mix('resources/css/dashboard.css') }}" rel="stylesheet">
@include('banner');

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>SISTEMA</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">


        <!-- Styles -->
        <style>
            body{
                font-family: 'Nunito', sans-serif;


            }
        </style>
    </head>


    <body class="antialiased">
        <div id="MostrarPublicaciones">
            @vite('resources/js/app.js')

        </div>




    </body>
</html>
