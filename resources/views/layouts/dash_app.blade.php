<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Agrega el enlace al archivo CSS compilado de Tailwind CSS -->
    <link href="{{ mix('resources/css/dashboard.css') }}" rel="stylesheet">

</head>

<body class="antialiased">

    <div id="dashboard">
        @vite('resources/js/main.js')
    </div>


</body>
</html>
