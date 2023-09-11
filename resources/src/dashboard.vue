<template>
    <div>
      <h1 class="text-2xl font-semibold mb-4">Bienvenido al Dashboard vista de prueba para probar funcionalidades no es el final </h1>

      <!-- Cards de resumen -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Card 1: Usuarios -->
        <div class="bg-white p-4 rounded-lg shadow-lg">
          <div class="flex items-center justify-between">
            <div class="text-xl font-semibold text-indigo-600">Usuarios</div>
            <div class="text-3xl font-bold text-indigo-600">500</div>
          </div>
        </div>

        <!-- Card 2: Ventas -->
        <div class="bg-white p-4 rounded-lg shadow-lg">
          <div class="flex items-center justify-between">
            <div class="text-xl font-semibold text-red-600">Reportes</div>
            <div class="text-3xl font-bold text-red-600">100</div>
          </div>
        </div>

    </div>
    </div>

  </template>



  <script>
  export default {
    data() {
      return {};
    },
  };
  </script>

  <style scoped>
  /* Estilos específicos para este componente si es necesario */
  </style>
