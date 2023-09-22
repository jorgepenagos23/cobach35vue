@extends('layouts.dash_app')

<!DOCTYPE html>
<html lang="es">

<head>
<meta name="csrf-token">

<title>DASHBOARD COBACH</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<!-- Agrega el enlace al archivo CSS compilado de Tailwind CSS -->
<link href="{{ mix('resources/css/dashboard.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  rel="stylesheet" />
</head>


<body class="antialiased">

    <div id="dashboard">
        @vite('resources/js/main.js')
    </div>


</body>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>

</head>
</html>



