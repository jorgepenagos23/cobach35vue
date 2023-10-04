<template>
    <navegacion></navegacion>


    <v-card class="mx-auto" max-width="900">
    <v-card-item class="bg-blue-darken-4">
      <v-card-title> Carlos Sanchez </v-card-title>
      <template v-slot:append>
        <v-container fluid style="height: 100px">
    <v-row justify="center">

      <v-menu min-width="200px" rounded>
        <template v-slot:activator="{ props }">
          <v-btn icon v-bind="props">
            <v-avatar color="red" size="large">
              <span class="text-h5">{{ user.initials }}</span>
            </v-avatar>
          </v-btn>
        </template>
        <v-card>
          <v-card-text>
            <div class="mx-auto text-center">
              <v-avatar color="red">
                <span class="text-h5">{{ user.initials }}</span>
              </v-avatar>
              <h3>{{ user.fullName }}</h3>
              <p class="text-caption mt-1">{{ user.email }}</p>
              <v-divider class="my-3"></v-divider>
              <v-btn rounded variant="text"> Edit Account </v-btn>
              <v-divider class="my-3"></v-divider>
              <v-btn rounded variant="text"> Disconnect </v-btn>
            </div>
          </v-card-text>
        </v-card>
      </v-menu>
    </v-row>
  </v-container>      </template>
    </v-card-item>

    <v-card-text class="pt-4">
    Bienvenido
    </v-card-text>

      <v-card
    class="mx-auto"
    width="900"
    prepend-icon="mdi-account"
  >
    <template v-slot:title>
    Datos escolares
    </template>

    <v-card-text>

    </v-card-text>
  <v-card>
    <v-list lines="three">
      <!-- Primer elemento de la lista -->
      <v-list-item link>
        <template v-slot:prepend>
          <v-avatar class="me-4 mt-2" rounded="0">
            <v-img src="URL_DEL_PRIMER_ITEM" cover></v-img>
          </v-avatar>
        </template>
        <v-list-item-title
          class="text-uppercase font-weight-regular text-caption"
        >Categoría 1</v-list-item-title>
        <div>Título del primer elemento</div>
      </v-list-item>

      <!-- Segundo elemento de la lista -->
      <v-list-item link>
        <template v-slot:prepend>
          <v-avatar class="me-4 mt-2" rounded="0">
            <v-img src="URL_DEL_SEGUNDO_ITEM" cover></v-img>
          </v-avatar>
        </template>
        <v-list-item-title
          class="text-uppercase font-weight-regular text-caption"
        >Categoría 2</v-list-item-title>
        <div>Título del segundo elemento</div>
      </v-list-item>

      <!-- Agrega más elementos de la lista según sea necesario -->

    </v-list>
  </v-card>


  </v-card>

  </v-card>



  </template>

  <script>
    export default {
      data: () => ({
        user: {
          initials: 'CS',
          fullName: 'Carlos Sanchez',
          email: 'carlos@cobach35.com',
        },






      }),
    }








  </script>
