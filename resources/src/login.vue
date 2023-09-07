

<template>
<div class="bg-[#F9FAFB] h-screen w-screen flex items-center">
        <div class="h-max mx-auto flex flex-col items-center">

            <div id="login" class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm">
                <div>
                    <div style="text-align: center;">
                    <img src="../imagenes/logo2.jpg" alt="" style="width: 80px; height: 100px; margin: 0 auto;">
                    </div>
                    <h1 class="text-xl font-bold text-center pb-10">INCIA SESION</h1>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="email">Correo</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="email" name="email" placeholder="cobach@.edu.mx">
                </div>
                <div>
                    <label class="text-gray-600 font-bold inline-block pb-2" for="password">Contraseña</label>
                    <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="password" name="password" placeholder="******">
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <input type="checkbox" name="remeberMe">
                        <label for="remeberMe">Verificación</label>
                    </div>
                    <div class="w-1/2">
                        <a class="font-bold text-blue-600" href="">Soporte Tecnico</a>
                    </div>
                </div>
                <div>
                    <input class="bg-[#3bce4e] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]" type="submit" value="Entrar" >
                </div>
                <div>
                    <p class="text-center">No reveles tu contraseña</p>
                </div>
                <div class="flex gap-4">
                    <button class="bg-[#1D9BF0] w-1/2 py-1 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]">Ayuda</button>
                </div>
            </div>
            <p class="text-sm text-gray-500 mt-10">Not a member? <a href="#" class="text-[#4F46E5] font-bold">Derechos Reservados Cobach 35</a></p>
        </div>
    </div>



    </template>

    <script setup>

    </script>
