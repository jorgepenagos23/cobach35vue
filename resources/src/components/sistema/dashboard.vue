    <template>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <header>

    <inicioVue> </inicioVue>

        </header>
     <navegacion> </navegacion>

        <body>

            <v-container class="bg-sky-950	">
    <v-row justify="center">
        <v-col cols="12" lg="8" >
        <v-card color="#476270" theme="dark">
          <div class="d-flex flex-no-wrap justify-space-between ">
            <div>
              <v-card-title class="text-h5">PUBLICACIONES</v-card-title>
              <v-card-subtitle>Manejador de Publicaciones</v-card-subtitle>
              <v-card-actions>
                <button @click="$router.push('/editar-publicaciones')" class="min-w-auto w-32 h-10 bg-sky-800 p-2 rounded-r-full hover:bg-green-500 text-white font-semibold hover:flex-grow transition-all duration-200 ease-in-out">
                 ENTRAR
                </button>              </v-card-actions>
            </div>
            <v-avatar class="ma-3" size="125" rounded="0">
              <v-img src="https://www.agr.una.py/assets/images/iconos/publicaciones.png"></v-img>
            </v-avatar>
          </div>
        </v-card>
      </v-col>


      <v-col cols="12" lg="8">
        <v-card color="#770B2A" theme="dark">
          <div class="d-flex flex-no-wrap justify-space-between">
            <div>
              <v-card-title class="text-h5">REPORTES</v-card-title>
              <v-card-subtitle>Manejador de Reportes</v-card-subtitle>
              <v-card-actions>
                <button  @click="$router.push('/editar-reportes')"  class="min-w-auto w-32 h-10 bg-sky-800 p-2 rounded-r-full hover:bg-green-500 text-white font-semibold hover:flex-grow transition-all duration-200 ease-in-out">
                 ENTRAR
                </button>



            </v-card-actions>
            </div>
            <v-avatar class="ma-3" size="125" rounded="0">
              <v-img src="https://cdn-icons-png.flaticon.com/512/2852/2852376.png"></v-img>
            </v-avatar>
          </div>
        </v-card>
      </v-col>

      <v-col cols="12" lg="8">
        <v-card color="#256325" theme="dark">
          <div class="d-flex flex-no-wrap justify-space-between">
            <div>
              <v-card-title class="text-h5">ALUMNOS</v-card-title>
              <v-card-subtitle>SISTEMA</v-card-subtitle>
              <v-card-actions>
                <button @click="$router.push('/alumnos')" class="min-w-auto w-32 h-10 bg-sky-800 p-2 rounded-r-full hover:bg-green-500 text-white font-semibold hover:flex-grow transition-all duration-200 ease-in-out">
                 ENTRAR
                </button>
              </v-card-actions>
            </div>
            <v-avatar class="ma-5" size="125"  rounded="2">
                <article class="relative w-full h-40 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out "
            style="background-image: url('https://www.escenachiapas.com/wp-content/uploads/2019/06/FOTO-BOLET%C3%8DN-COBACH-2-3.jpg');">
            <img class="absolute bottom-0 right-1 w-[4rem] h-[4rem] transition duration-300 group-hover:scale-[1.4]" src="https://www.agr.una.py/assets/images/iconos/bd.png" 	style=" z-index: -1;"		alt="" />

            <div class="absolute inset-0 bg-white bg-opacity-10 group-hover:opacity-75 transition duration-300 ease-in-out">
            </div>
            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">


            </div>
        </article>
     </v-avatar>
          </div>
        </v-card>
      </v-col>
      <v-col cols="12" lg="8">
        <v-card color="#0B1877" theme="dark">
          <div class="d-flex flex-no-wrap justify-space-between">
            <div>
              <v-card-title class="text-h5">BOLETAS</v-card-title>
              <v-card-subtitle>SISTEMA</v-card-subtitle>
              <v-card-actions>
                <button class="min-w-auto w-32 h-10 bg-sky-800 p-2 rounded-r-full hover:bg-green-500 text-white font-semibold hover:flex-grow transition-all duration-200 ease-in-out">
                 ENTRAR
                </button>
              </v-card-actions>
            </div>
            <v-avatar class="ma-5" size="125"  rounded="2">
                <article class="relative w-full h-40 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out "
            style="background-image: url('https://calificacionessep.online/wp-content/uploads/2023/07/Calificaciones-de-preparatoria-SEP.jpg');">
            <img class="absolute bottom-0 right-1 w-[4rem] h-[4rem] transition duration-300 group-hover:scale-[1.4]" src="https://www.agr.una.py/assets/images/iconos/bd.png" 	style=" z-index: -1;"		alt="" />

            <div class="absolute inset-0 bg-white bg-opacity-10 group-hover:opacity-75 transition duration-300 ease-in-out">
            </div>
            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">


            </div>
        </article>
     </v-avatar>
          </div>
        </v-card>
      </v-col>

      <v-col cols="12" lg="8">
        <v-card color="#078559" theme="dark">
          <div class="d-flex flex-no-wrap justify-space-between">
            <div>
              <v-card-title class="text-h5">SECCIONES</v-card-title>
              <v-card-subtitle>SISTEMA</v-card-subtitle>
              <v-card-actions>
                <button @click="$router.push('/tabla-secciones')" class="min-w-auto w-32 h-10 bg-sky-800 p-2 rounded-r-full hover:bg-green-500 text-white font-semibold hover:flex-grow transition-all duration-200 ease-in-out">
                 ENTRAR
                </button>
              </v-card-actions>
            </div>
            <v-avatar class="ma-5" size="125"  rounded="2">
                <article class="relative w-full h-40 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out "
            style="background-image: url('https://cdn-icons-png.flaticon.com/512/1627/1627294.png');">
            <img class="absolute bottom-0 right-1 w-[4rem] h-[4rem] transition duration-300 group-hover:scale-[1.4]" src="https://www.agr.una.py/assets/images/iconos/bd.png" 	style=" z-index: -1;"		alt="" />

            <div class="absolute inset-0 bg-white bg-opacity-10 group-hover:opacity-75 transition duration-300 ease-in-out">
            </div>
            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">


            </div>
        </article>
     </v-avatar>
          </div>
        </v-card>
      </v-col>

      <v-col cols="12" lg="8">
        <v-card color="#078559" theme="dark">
          <div class="d-flex flex-no-wrap justify-space-between">
            <div>
              <v-card-title class="text-h5">SUBIR HOJAS DE EXCEL  ALUMNOS</v-card-title>
              <v-card-subtitle>SISTEMA</v-card-subtitle>
              <v-card-actions>
                <button @click="subiralumno" class="min-w-auto w-32 h-10 bg-sky-800 p-2 rounded-r-full hover:bg-green-500 text-white font-semibold hover:flex-grow transition-all duration-200 ease-in-out">
                 ENTRAR
                </button>
              </v-card-actions>
            </div>
            <v-avatar class="ma-5" size="125"  rounded="2">
                <article class="relative w-full h-40 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out "
            style="background-image: url('https://miro.medium.com/v2/resize:fit:720/format:webp/1*4nLaSMTo7mb66Vl6tlReTw.jpeg');">
            <img class="absolute bottom-0 right-1 w-[4rem] h-[4rem] transition duration-300 group-hover:scale-[1.4]" src="https://www.agr.una.py/assets/images/iconos/bd.png" 	style=" z-index: -1;"		alt="" />

            <div class="absolute inset-0 bg-white bg-opacity-10 group-hover:opacity-75 transition duration-300 ease-in-out">
            </div>
            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">


            </div>
        </article>
     </v-avatar>
          </div>
        </v-card>
      </v-col>




    </v-row>
  </v-container>


    <div class="h-full ml-14 mt-14 mb-10 md:ml-64 bg-sky-800 " style=" z-index: -1;">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4" style=" z-index: -1;">







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
