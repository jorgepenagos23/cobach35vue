<template>
  <div class="div-reportes" >

<v-card color="#385F73" theme="light"    max-width="900px" class="mt-4 ">
    <v-card-title class="text-h5 font-weight-regular bg-blue-grey ">
        Crear reporte
      </v-card-title>
      <v-sheet width="900" class="mx-auto">
    <v-form ref="form" >

      <v-text-field
        v-model="Nombre"
        :counter="10"
        :rules="nameRules"
        label="Nombre"
        required
      ></v-text-field>
      <v-text-field
        v-model="Matricula"
        :counter="10"
        :rules="nameRules"
        label="Matricula"
        required
      ></v-text-field>

      <v-select
        v-model="select"
        :items="items"
        :rules="[v => !!v || 'Item is required']"
        label="Item"
        required
      ></v-select>

      <v-checkbox
        v-model="checkbox"
        :rules="[v => !!v || 'You must agree to continue!']"
        label="Do you agree?"
        required
      ></v-checkbox>

      <div class="div-botones">
        <v-btn color="success" class="mt-4" block @click="validate">
          Crear  reporte
        </v-btn>

        <v-btn color="error" class="mt-4" block @click="reset">
Limpiar
        </v-btn>

      </div>
    </v-form>
  </v-sheet>
 </v-card>
</div>
    </template>

<style>
/* Estilo para centrar vertical y horizontalmente */
.div-reportes {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; /* Esto asegura que el div ocupe toda la altura de la pantalla */
  max-width: 100%; /* El div ocupará el ancho máximo permitido */
}

/* Estilo para hacer el div responsive */
@media (max-width: 808px) {
  /* Ajusta el ancho del div para dispositivos móviles */
  .div-reportes {
    max-width: 100%; /* Por ejemplo, el div ocupará el 80% del ancho en dispositivos móviles */
  }
}

.div-botones{
    display: flex-column;

justify-content: center;

}





</style>




    <script>
    export default {

    }
    </script>
