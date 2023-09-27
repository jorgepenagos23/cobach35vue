<template>
    <div id="app">
      <header>
        <banner></banner>
      </header>

      <main>
        <transition name="fade" mode="out-in">
          <router-view></router-view>
        </transition>

      </main>
    </div>
  </template>

  <style scoped>
  /* Estilo para el banner */
  header {
    position: fixed; /* Fija el banner en la parte superior */
    width: 100%; /* Ancho completo */
    background-color: #f1f2f7; /* Cambia el color de fondo según tus preferencias */
    color: #f3f3f300; /* Cambia el color del texto según tus preferencias */
    padding: 30px 0; /* Ajusta el espacio interior del banner */
    text-align: center; /* Centra el contenido del banner */
    z-index: -3; /* Asegura que el banner esté por encima del contenido */
  }

  /* Estilo para el contenido debajo del banner */
  main {
    margin-top: 60px; /* Ajusta el margen superior para dar espacio al banner */
    padding: 20px; /* Ajusta el espacio interior del contenido */
  }

  </style>



  <script>

import banner from "../banner.vue";

  export default {


    components: {
        banner,
    },

            methods:{
                scrollToTop() {
                     window.scrollTo({ top: 45, behavior: 'smooth' });
                                     }
            }

  };


  </script>
