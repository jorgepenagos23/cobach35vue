<template>
    <v-card>
      <v-layout>
        <!-- Barra de navegación -->
        <v-navigation-drawer
          color="#0F3932"
          expand-on-hover
          rail
          style="position: fixed; z-index: 4;"
          :width="drawerWidth"
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
            <v-list-item :to="{ name: 'dashboard' }" prepend-icon="mdi-folder" title="Inicio"></v-list-item>
            <v-list-item prepend-icon="mdi-account-multiple" title="Base de Datos" value="shared"></v-list-item>
            <v-list-item prepend-icon="mdi-star" title="Configuracion " value="starred"></v-list-item>
            <v-list-item prepend-icon="mdi-star" title="Modo Dark" @click="toggleTheme"></v-list-item>
            <v-list-item prepend-icon="mdi-star" title="Salir" @click="logout"></v-list-item>
          </v-list>
        </v-navigation-drawer>

        <!-- Contenido principal -->
        <v-main>
          <!-- Contenido principal de tu aplicación -->
        </v-main>
      </v-layout>
    </v-card>
  </template>

  <script>
  export default {
    data() {
      return {
        drawerWidth: 200, // Ajusta el ancho del drawer aquí
      };
    },
    methods: {
      toggleTheme() {
        // Verifica el tema actual y alterna al otro
        this.$vuetify.theme.light = !this.$vuetify.theme.dark;
      },
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
