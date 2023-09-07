
@extends('layouts.app')


<nav class="bg-blue-900 shadow-md" x-data="{navbarOpen:false}">

    <div class="container flex flex-wrap px-4 py-2 mx-auto lg:space-x-4">
      <!-- brand -->
      <a
        href="#"
        class="inline-flex p-2 text-xl font-bold tracking-wider text-white uppercase "
                        <img src="../imagenes/logo2.jpg" class="w-20 mx-auto mb-4 rounded-lg">

        COBACH 35</a
      >
      <!-- brand -->
      <!-- toggler btn -->
      <button
        class="inline-flex items-center justify-center w-10 h-10 ml-auto text-white border rounded-md outline-none  lg:hidden focus:outline-none"
        @click="navbarOpen = !navbarOpen"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="w-6 h-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"
          />
        </svg>
      </button>
      <!-- toggler btn -->
      <!-- menu -->
      <div
        class="w-full mt-2 lg:inline-flex lg:w-auto lg:mt-0"
        :class="{'hidden':!navbarOpen,'flex':navbarOpen}"
      >
        <ul
          class="flex flex-col w-full space-y-2  lg:w-auto lg:flex-row lg:space-y-0 lg:space-x-2"
        >
        <li>
            <a
              href="#"
              class="flex px-4 py-2 font-medium text-white rounded-md  hover:bg-blue-800"
              >Inicio</a
            >
          </li>
          <li>
            <a
              href="/publicaciones"
              class="flex px-4 py-2 font-medium text-black bg-green-100 rounded-md  hover:bg-blue-800"
              >Noticias</a
             >
          </li>
          <li>
            <a
              href="#"
              class="flex px-4 py-2 font-medium text-white rounded-md  hover:bg-blue-800"
              >Identidad</a
            >
          </li>
          <!-- dropdown -->
          <li class="relative" x-data="{dropdownOpen:false}">
            <button
              href="#"
              class="flex w-full px-4 py-2 font-medium text-white rounded-md outline-none  focus:outline-none hover:bg-blue-800"
              @click="dropdownOpen = !dropdownOpen"
            >
              Oferta Educativa
            </button>

            <li class="relative" x-data="{dropdownOpen:false}">
                <button
                  href="#"
                  class="flex w-full px-4 py-2 font-medium text-white rounded-md outline-none  focus:outline-none hover:bg-blue-800"
                  @click="dropdownOpen = !dropdownOpen"
                >
                  Instalaciones
                </button>

                <li class="relative" x-data="{dropdownOpen:false}">
                    <button
                      href="#"
                      class="flex w-full px-4 py-2 font-medium text-white rounded-md outline-none  focus:outline-none hover:bg-blue-800"
                      @click="dropdownOpen = !dropdownOpen"
                    >
                      Alumnos
                    </button>




    <!-- //despues de los apartados meter el drop menu -->
  </nav>
