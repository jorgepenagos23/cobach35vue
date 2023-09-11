<template>
  <div class="bg-[#dcffe4] h-screen w-screen flex items-center">
    <div class="h-max mx-auto flex flex-col items-center">
      <div id="login" class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm">
        <div>
          <div style="text-align: center;">
            <img src="../imagenes/logo2.jpg" alt="" style="width: 80px; height: 100px; margin: 0 auto;">
          </div>
          <h1 class="text-xl font-bold text-center pb-10">INICIA SESIÓN</h1>
          <label class="text-gray-600 font-bold inline-block pb-2" for="email">Correo</label>
          <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" v-model="correo" type="email" name="email" placeholder="cobach@.edu.mx">
        </div>
        <div>
          <label class="text-gray-600 font-bold inline-block pb-2" for="password">Contraseña</label>
          <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" v-model="password" type="password" name="password" placeholder="******">
        </div>
        <div class="flex">
          <div class="w-1/2">
            <input type="checkbox" name="remeberMe">
            <label for="remeberMe">Verificación</label>
          </div>
          <div class="w-1/2">
            <a class="font-bold text-blue-600" href="">Soporte Técnico</a>
          </div>
        </div>
        <div>
          <button class="bg-[#3bce4e] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#358d3c]" type="submit" @click="login">Entrar</button>
        </div>
        <div>
          <p class="text-center">No reveles tu contraseña</p>
        </div>
        <div class="flex gap-4">
          <button class="bg-[#1D9BF0] w-1/2 py-1 rounded-md text-white font-bold cursor-pointer hover:bg-[#4dd45f]">Ayuda</button>
        </div>
      </div>
      <p class="text-sm text-gray-500 mt-10"><a href="#" class="text-[#4F46E5] font-bold">Derechos Reservados Cobach 35</a></p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      correo: '',
      password: '',
      csrfToken: '' // Agrega csrfToken como una propiedad de datos
    };
  },
  mounted() {
    // Mueve la obtención del token CSRF al método mounted
    this.csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  },
  methods: {
    login() {
      // Ahora csrfToken está disponible aquí
      axios.post('/authenticate', {
        _token: this.csrfToken, // Usa this.csrfToken en lugar de csrfToken

        correo: this.correo,
        password: this.password
      })
      .then(response => {
    if (response.data.message) {
        console.log(response.data.message);

        // Verifica si hay una URL de redirección y redirige al usuario
        if (response.data.redirect) {
            window.location.href = response.data.redirect; // Redirige al usuario a la URL proporcionada
        }
    } else {
        console.error('Error: No se recibió un mensaje en la respuesta.');
    }
})


    }
  }
};
</script>
