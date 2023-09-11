@extends('layouts.app')
@include('banner');
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INICIA SESIÓN</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body{
                font-family: 'Nunito', sans-serif;


            }
        </style>
    </head>

    <body class="antialiased">
        <div id="login">
 <!-- Agrega un iframe para mostrar el banner -->
            <iframe src="/banner" frameborder="0" width="100%" height="200"></iframe>
        </div>
        @vite('resources/js/app.js')


    </body>

</html>
