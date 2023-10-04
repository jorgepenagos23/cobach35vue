<template>

    <v-card
      class="mx-auto"

      max-width="900"
    >
    <v-card-item class="bg-orange-darken-4">
        <v-card-title> Publicaciones  </v-card-title>

        <template v-slot:append>
          <v-btn color="white" icon="mdi-plus" size="small"></v-btn>
        </template>
      </v-card-item>


      <v-divider></v-divider>

      <v-container class="text-center">
          <v-autocomplete
                  label="Buscar publicacion"
                  theme="dark"
                  :items="['Publicacion']"
                  ></v-autocomplete>
             </v-container>
      <v-virtual-scroll
        :items="items"
        height="320"
        item-height="48"
      >
        <template v-slot:default="{ item }">
          <v-list-item
            :title="`Publicaciones`"
            :subtitle="`Fecha #${item}`"
          >
            <template v-slot:prepend>
              <v-icon class="bg-secondary">mdi-forum</v-icon>
            </template>

            <template v-slot:append>
              <v-btn
                icon="mdi-pencil"
                size="x-small"
                variant="tonal"
              ></v-btn>
            </template>
          </v-list-item>
        </template>
      </v-virtual-scroll>
    </v-card>
  </template>

  <script>
    export default {
      data: () => ({
        items: Array.from({ length: 100 }, (k, v) => v + 1),
      }),
    }
  </script>
