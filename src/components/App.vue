<template>




    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
    <img src="http://35tuxtlanorte.edu.mx/images/logo35.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Cobach
  </a>
      <router-link class="navbar-brand" to="/"></router-link>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
          <router-link class="nav-link" to="/">Home</router-link>
          </li>

          <li class="nav-item">
            <router-link class="nav-link" to="/MostrarPublicaciones"> Publicaciones</router-link>
          </li>


          <li class="nav-item">
            <router-link class="nav-link" to="/login">Iniciar Sesión</router-link>
          </li>

          <li class="nav-item">
            <router-link class="nav-link" to="/Navigation">Navegacion</router-link>
          </li>

        </ul>


   </div>


    </nav>
    <inicioVue> </inicioVue>
    <main>
        <router-view></router-view> <!-- Aquí se mostrarán los componentes de las rutas -->

    </main>
  </template>

<script>
import inicioVue from "./inicio.vue";
export default{

    name: 'App',
    components: {
        inicioVue
    }

}
</script>
