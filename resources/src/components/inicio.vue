<template>
    <div id="app">
      <nav class="navbar bg-emerald-500" >
        <h1>Listado de Secciones</h1>
        <ul>
          <li v-for="seccion in secciones" :key="seccion.id">
            <template v-if="seccion.tipo === 'seccion'">
          {{ seccion.nombre }}
        </template>
          </li>
        </ul>
      </nav>
    </div>
  </template>



  <style>


  .navbar h1 {
    margin: 0;
    padding: 0;
  }

  .navbar ul {
    list-style-type: none;
    padding: 0;
    justify-content: center;
  }

  .navbar li {
    display: inline;
    margin-right: 30px;
  }

  .navbar a {
    text-decoration: none;
    color: #fff;
  }
  </style>

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
