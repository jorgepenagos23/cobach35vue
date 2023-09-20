
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BANNER Y SECCIONES</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">
    <link href="/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">


    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>




<body class="antialiased">
    @include('banner')

    <div id="secciones">

     @vite('resources/js/app.js')

      </div>


</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
