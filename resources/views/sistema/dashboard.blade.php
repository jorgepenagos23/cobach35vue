@extends('layouts.app')
@include('banner')
<head>
    <meta name="csrf-token">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>DASHBOARD</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body{
            font-family: 'Nunito', sans-serif;


        }
    </style>

<body class="antialiased">
    <div id="dashboard">
<!-- Agrega un iframe para mostrar el banner -->
    </div>
    @vite('resources/js/app.js')


</body>
</head>




