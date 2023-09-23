<template>
      <v-app>

        <v-app-bar app color="primary">
          <v-toolbar-title>Barra de Navegación</v-toolbar-title>
          <!-- Agrega elementos de la barra de navegación aquí -->
        </v-app-bar>

        <v-main>
          <v-container>

          </v-container>
        </v-main>
      </v-app>
  </template>




  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        secciones: [],
      };
    },
    created() {
      axios.get('api/v1/secciones')
        .then(response => {
          this.secciones = response.data.secciones;
        })
        .catch(error => {
          console.error('Error al obtener las secciones:', error);
        });
    },


    methods:{

  },

    };
  </script>
