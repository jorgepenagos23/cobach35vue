<template>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">

    <div class="flex h-screen items-center">
      <div class="group relative mx-auto w-96 overflow-hidden rounded-[16px] bg-gradient-to-bl from-blue-800 to-sky-900 p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 hover:to-pink-500">
        <div class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible"></div>
        <div class="relative rounded-[15px] bg-white p-6">
          <div class="space-y-4">
            <img src="https://35tuxtlanorte.edu.mx/images/logo35.png" alt="" style="z-index: 2;" />

            <p class="text-lg font-semibold-sans text-center text-slate-800">Inicia sesión</p>
            <div class="mx-auto my-36 flex h-[300px] w-[350px] flex-col border-2 bg-white text-black shadow-xl">

                <form @submit.prevent="login">

                <div class="mx-8 mt-7 mb-1 flex flex-row justify-start space-x-2">
                  <div class="h-7 w-3 bg-[#af2d2d]"></div>
                  <div class="w-3 text-center font-sans text-xl font-bold"><p>Login</p></div>
                </div>
                <div class="flex flex-col items-center">
                  <input class="my-2 w-72 border p-2" v-model="correo" type="email" placeholder="Usuario" />
                  <div class="relative">
                    <input
                      class="my-2 w-72 border p-2 pr-10"
                      v-model="password"
                      :type="showPassword ? 'text' : 'password'"
                      placeholder="Contraseña"
                    />
                    <button
                      class="absolute top-2 right-2"
                      @click="togglePasswordVisibility"
                    >
                      {{ showPassword ? 'Ocultar' : 'Mostrar' }}
                    </button>
                  </div>
                </div>

                <div class="my-2 flex justify-center">
                  <button class="w-72 border bg-green-600 p-2 rounded-xl hover:bg-green-700 transition-colors duration-50 hover:animate-pulse ease-out text-white" @click="login">
                    Entrar
                  </button>

                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>

<style >

background{


background-color: darkgray;
}


</style>
<script>
import Swal from "sweetalert2";

export default {
  data() {
    return {
      correo: "",
      password: "",
      csrfToken: "",
      showPassword: false, // Variable para alternar la visibilidad de la contraseña
      error: false, // Variable para manejar errores de inicio de sesión
    };
  },
  mounted() {
    this.csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
  },
  methods: {
    login() {
      axios
        .post("/authenticate", {
          _token: this.csrfToken,
          correo: this.correo,
          password: this.password,
        })
        .then((response) => {
          if (response.data.message) {
            console.log(response.data.message);
            Swal.fire({
              icon: "success",
              title: "Bienvenido!",
              text: "Has iniciado sesión exitosamente.",
              showConfirmButton: false,
              timer: 7000,
            });
            if (response.data.redirect) {
              window.location.href = response.data.redirect;
            } else {
              console.error("Error: No se recibió una URL de redirección en la respuesta.");
            }
          } else {
            this.error = true;
          }
        })
        .catch((error) => {
          console.error("Error en la solicitud:", error);
        });
    },
    togglePasswordVisibility() {
      this.showPassword = !this.showPassword;
    },
  },
};
</script>
