<template>
  <div>
    <header>
      <navegacion></navegacion>

    </header>
    <v-container class="text-center">
        <v-autocomplete
                label="Buscar reporte"
                theme="dark"
                :items="['Alumno', 'Alumno', 'Alumno', 'Alumno', 'Alumno 5', 'Alumno 6']"
                ></v-autocomplete>
                    </v-container>
                </div>

    <main>
        <div class="d-flex">
            <h1> Mostrar el alumno</h1>

        </div>


        <body>

            <crear-reportes></crear-reportes>

        </body>
    </main>

  </template>
        <style>

body{
    background-color: rgb(212 212 216);
}
        </style>




  <script>
  import Editar from '.././reportes/Editar.vue';
  import Crear from '.././reportes/Crear.vue';

  export default {
    data() {
      return {
        searchQuery: '', // Variable para almacenar la consulta de búsqueda
        searchResults: [], // Almacenará los resultados de búsqueda
      };
    },
    methods: {
      buscarReporte() {
        // Aquí puedes implementar la lógica para realizar la búsqueda
        console.log('Búsqueda realizada:', this.searchQuery);

        // Supongamos que obtienes los resultados de búsqueda de alguna manera
        // y los asignas a la variable searchResults
        // Por ejemplo:
        this.searchResults = ['Resultado 1', 'Resultado 2', 'Resultado 3'];
      },
    },
  };
  </script>
