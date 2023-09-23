<template>
    <div id="app">
      <header>
        <banner></banner>
      </header>
      <body>
        <transition name="fade" mode="out-in">
          <router-view></router-view>
        </transition>
      </body>
      <main style="position: relative; z-index: 1;">
        <!-- Aquí se mostrará el contenido de tus vistas -->
      </main>
    </div>
  </template>

<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active en versiones antiguas de Vue */ {
  opacity: 0;
}
</style>
  <script>
import banner from "/laragon/www/cobach35vue/resources/src/components/banner.vue";

  export default {
    // Otros datos y métodos de App.vue...
    components: {
        banner,
    },
  };
  </script>
