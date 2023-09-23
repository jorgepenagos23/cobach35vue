    <template>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <header>

    <inicioVue> </inicioVue>

        </header>
     <navegacion> </navegacion>

        <body>
>      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">


          <article class="relative w-full h-40 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out"
                    style="background-image: url('https://www.escenachiapas.com/wp-content/uploads/2019/06/FOTO-BOLET%C3%8DN-COBACH-2-3.jpg');">
                    <img class="absolute bottom-0 right-1 w-[4rem] h-[4rem] transition duration-300 group-hover:scale-[1.4]" src="https://www.agr.una.py/assets/images/iconos/bd.png" 			alt="" />

                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">

                    </div>
                    <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">

                        <h3 class="text-center">
                            <a class="text-white text-2xl font-bold text-center" href="#">
                                <span class="absolute inset-0"></span>
                                ALUMNOS
                                <div class="group relative flex cursor-pointer items-center">
                                    <button @click="subiralumno" class="text-white text-sm font-medium uppercase leading-6">Subir hoja de excel</button>
                                </div>
                            </a>

                        </h3>
                    </div>
                </article>

                <article class="relative w-full h-40 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 ease-in-out"
                    style="background-image: url('https://scontent-qro1-1.xx.fbcdn.net/v/t1.6435-9/118988297_924535877956405_7357496037096699677_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=e3f864&_nc_ohc=PtFLKGCFv08AX994twK&_nc_ht=scontent-qro1-1.xx&oh=00_AfDpGJA3_oVykRab4e1FW8tgdW3-ezYLj_KizPW_BplE7A&oe=653054BA');">
                    <img class="absolute bottom-0 right-1 w-[4rem] h-[4rem] transition duration-300 group-hover:scale-[1.4]" src="https://www.agr.una.py/assets/images/iconos/estudiantes.png" 			alt="" />

                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">

                    </div>
                    <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">

                        <h3 class="text-center">
                            <a class="text-white text-2xl font-bold text-center" href="#">
                                <span class="absolute inset-0"></span>
                                ALUMNOS
                                <div class="group relative flex cursor-pointer items-center">
                                    <button @click="subiralumno" class="text-white text-sm font-medium uppercase leading-6">ALUIMNOS</button>
                                </div>
                            </a>

                        </h3>
                    </div>
                </article>

                <article class="relative w-full h-40 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out"
                    style="background-image: url('https://insyde.org.mx/wp-content/uploads/2019/08/banner_publicaciones-1800x469.jpg');">
                    <img class="absolute bottom-0 right-1 w-[4rem] h-[4rem] transition duration-300 group-hover:scale-[1.4]" src="https://www.agr.una.py/assets/images/iconos/publicaciones.png" 			alt="" />

                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">

                    </div>
                    <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">

                        <h3 class="text-center">
                            <a class="text-white text-2xl font-bold text-center" href="#">
                                <span class="absolute inset-0"></span>
                                Publicaciones
                                <div class="group relative flex cursor-pointer items-center">
                                    <button @click="subiralumno" class="text-white text-sm font-medium uppercase leading-6">PUBLICACIONES</button>
                                </div>
                            </a>

                        </h3>
                    </div>
                </article>

                <article class="relative w-full h-40 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out"
                    style="background-image: url('https://calificacionessep.online/wp-content/uploads/2023/07/Calificaciones-de-preparatoria-SEP.jpg');">
                    <img class="absolute bottom-0 right-1 w-[4rem] h-[4rem] transition duration-300 group-hover:scale-[1.4]" src="https://www.agr.una.py/assets/images/iconos/encuestas.png" 			alt="" />

                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out">

                    </div>
                    <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">

                        <h3 class="text-center">
                            <a class="text-white text-2xl font-bold text-center" href="#">
                                <span class="absolute inset-0"></span>
                                Boletas
                                <div class="group relative flex cursor-pointer items-center">
                                    <button @click="subiralumno" class="text-white text-sm font-medium uppercase leading-6">BOLETAS</button>
                                </div>
                            </a>

                        </h3>
                    </div>
                </article>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
        </div>
      </div>

</body>

</template>

<script>
import Swal from "sweetalert2";
import navegacion from "../../../js/Componentes/navegacion.vue";
import inicioVue from "../inicio.vue";

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
                background: 'rgba(238, 59, 27)', // Estilo de fondo definido en tu CSS
                icon: 'success',
                title: '¡Hasta pronto!',
                text: 'Has cerrado sesión exitosamente.',
                showConfirmButton: false,
                timer: 7000 // Cambia el tiempo que deseas que aparezca la alerta
                });

    },

    subiralumno() {
      axios.get('/inicio-alumno')
        .then(response => {
          console.error('correcto:', response.status);
          window.location.href = '/inicio-alumno';

        })
        .catch(error => {
          console.error('Error :', error);
        });
    },




    setDark(val) {
      if (val === "dark") {
        document.documentElement.classList.add('dark');
        // Agrega las referencias a los elementos DOM necesarios
        // Ejemplo: this.$refs.moon.classList.add("hidden");
        // ...
      } else {
        document.documentElement.classList.remove('dark');
        // ...
      }
    },
    openNav() {
      if (sidebar.classList.contains('-translate-x-48')) {
        // max sidebar
        sidebar.classList.remove("-translate-x-48");
        // ...
      } else {
        // mini sidebar
        sidebar.classList.add("-translate-x-48");
        // ...
      }
    },

    name: 'App',
    components: {
        navegacion
    },

    name: 'App',
    components: {
        inicioVue
    }


  },
  mounted() {
    // Cargar Alpine.js después de que Vue.js haya inicializado el componente
    const script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js';
    script.defer = true;
    document.body.appendChild(script);
  },
};




</script>
