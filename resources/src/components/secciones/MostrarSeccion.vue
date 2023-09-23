<template>
<header>
    <banner> </banner>

</header>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
  <div class="container max-w-screen-lg mx-auto">
    <div>
      <h2 class="font-semibold text-xl text-gray-600">CRUD </h2>
      <p class="text-gray-500 mb-6">Espacio para modificar el orden o algun anuncio del banner</p>

      <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">
            <p class="font-medium text-lg"></p>
            <p></p>
          </div>

          <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                <div class="md:col-span-5 bg-orange-300">
    <label for="full_name">Lista de Secciones</label>
                <div>
                <h1 class="title">SECCIONES DESDE API</h1>
                <table class="min-w-full border-collapse block md:table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Orden de Presentación</th>
                        <th>Visible</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="seccion in secciones" :key="seccion.id">
                        <td>{{ seccion.nombre }}</td>
                        <td>{{ seccion.orden_presentacion }}</td>
                        <td>{{ seccion.visible }}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        <button @click="editarSeccion(seccion)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Editar</button>
                        <button @click="eliminarSeccion(seccion.id)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Eliminar</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>




              <div class="md:col-span-2">
                <label for="state">AGREGAR SECCIONES</label>

              </div>




              <div class="md:col-span-5 text-right">
                <div class="inline-flex items-end">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <main>
        <router-view></router-view> <!-- Aquí se mostrarán los componentes de las rutas -->

    </main>
  </template>

  <script>
  import axios from 'axios';
  import inicioVue from "../inicio.vue";
  import banner from "../banner.vue";

  export default {


    name: 'App',
    components: {
        inicioVue
    },

    components: {
        banner,
    },
    data() {
      return {
        secciones: [], // Inicializa con un array vacío
        error: null,
      };
    },
    mounted() {
      axios.get('/api/v1/secciones')
        .then(response => {
          // La solicitud se envió correctamente, y la respuesta está en 'response.data'
          this.secciones = response.data.secciones; // Asigna la matriz de secciones a 'this.secciones'
        })
        .catch(error => {
          // Ocurrió un error al enviar la solicitud
          console.error('Error al obtener los datos:', error);
          this.error = error;
        });
    },
  };
  </script>

  <style>
  .title {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
  }

  .seccion-item {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #f9f9f9;
  }

  /* Puedes agregar más estilos según tus preferencias */
  </style>
