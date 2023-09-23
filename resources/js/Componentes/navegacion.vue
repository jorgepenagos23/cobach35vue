<template>
    <v-card>
      <v-layout>
        <!-- Barra de navegación -->
        <v-navigation-drawer
          expand-on-hover
          rail
          style="z-index: 2;"
        >
          <v-list>
            <v-list-item
              prepend-avatar="https://randomuser.me/api/portraits/women/85.jpg"
              title="Usuario"
              subtitle="Rol"
            ></v-list-item>
          </v-list>

          <v-divider></v-divider>

          <v-list density="compact" nav>
            <v-list-item prepend-icon="mdi-folder" title="Inicio" value="myfiles"></v-list-item>
            <v-list-item prepend-icon="mdi-account-multiple" title="Base de Datos" value="shared"></v-list-item>
            <v-list-item prepend-icon="mdi-star" title="Configuracion de Sistema" value="starred"></v-list-item>
            <v-list-item prepend-icon="mdi-star" title="Salir" @click="logout"></v-list-item>
          </v-list>
        </v-navigation-drawer>

        <!-- Contenido principal -->
        <v-main style="height: 250px"></v-main>
      </v-layout>
    </v-card>
  </template>

  <script>
  export default {
    methods: {
      logout() {
        axios.post('/logout')
          .then(response => {
            console.error('cerrado sesión correctamente:', response.status);
            window.location.reload();
          })
          .catch(error => {
            console.error('Error al cerrar sesión:', error);
          });

        Swal.fire({
          background: 'rgba(238, 59, 27)',
          icon: 'success',
          title: '¡Hasta pronto!',
          text: 'Has cerrado sesión exitosamente.',
          showConfirmButton: false,
          timer: 7000
        });
      }
    }
  }
  </script>
