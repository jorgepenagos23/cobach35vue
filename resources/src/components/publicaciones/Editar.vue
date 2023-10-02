<template>
    <div>
      <header>
        <navegacion></navegacion>

      </header>
      <v-container class="text-center">
          <v-autocomplete
                  label="Buscar publicacion"
                  theme="dark"
                  :items="['Publicacion']"
                  ></v-autocomplete>
                      </v-container>
                  </div>

      <main>

          <body>

          <tabla-publicaciones></tabla-publicaciones>
<br>

            <crear-publicaciones></crear-publicaciones>

          </body>
      </main>

    </template>
