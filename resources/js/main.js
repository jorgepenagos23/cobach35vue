
import { createApp } from 'vue';
import App from '../src/components/App.vue';
import login from "../src/components/sistema/login.vue";
import inicio from "../src/components/inicio.vue";
import dashboard from "../src/components/sistema/dashboard.vue";
import secciones from "../src/secciones.vue";
import MostrarSeccion from "../src/components/secciones/MostrarSeccion.vue";
import MostrarPublicaciones from "../src/components/reportes/MostrarPublicaciones.vue";
import Navegation from '../src/components//sistema/Navegation.vue'; // Ajusta la ubicación según la estructura de tu proyecto
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import './bootstrap';
import navegacion from "./Componentes/navegacion.vue";
import banner from '../src/components/banner.vue';
import Editar from '../src/components/reportes/Editar.vue';
import Crear from '../src/components/reportes/Crear.vue';

import "../css/dist/js/bootstrap.bundle";
import "../css/dist/css/bootstrap.css";
import "../css/app.css"; // main css

import 'sweetalert2/dist/sweetalert2.css';
import '@mdi/font/css/materialdesignicons.css'

// IMPORTAMOS AXIOS
import VueAxios from 'vue-axios';
import axios from 'axios';

// Importamos y configuramos Vue Router
import { createWebHistory, createRouter } from 'vue-router'; // Asegúrate de importar createRouter correctamente
import router from './router'; // Importa tu archivo router.js

const app = createApp(App);

const loginApp = createApp(login);
loginApp.mount("#login");



const dashApp = createApp(dashboard);
dashApp.mount("#dashboard");

const seccionesApp = createApp(secciones);
seccionesApp.mount("#secciones");

const MostrarSeccionApp = createApp(MostrarSeccion); // Cambiar "crudseccion" a "crudseccionApp" aquí
MostrarSeccionApp.mount("#MostrarSeccion");

const MostrarPublicacionesApp = createApp(MostrarPublicaciones); // Cambiar "crudseccion" a "crudseccionApp" aquí
MostrarPublicacionesApp.mount("#MostrarPublicaciones");


const lightTheme = {
    // Configuración del tema claro
  };

  const darkTheme = {
    dark: true, // Habilita el tema oscuro
    // Otras configuraciones del tema oscuro si es necesario
  };

  const vuetify = createVuetify({
    components,
    directives,
    icons: {
      iconfont: 'mdi', // Configura el conjunto de iconos que importaste (en este caso, 'mdi' para Material Design Icons)
    },
    theme: {
      themes: {
        light: lightTheme,
        dark: darkTheme,
      },
      options: {
        customProperties: true, // Permite personalizar propiedades CSS en tus componentes
      },
    },
  });

app.use(VueAxios, axios);
app.use(router); // Usa el enrutador importado
app.use(vuetify)
app.component('navegacion', navegacion);
app.component('banner', banner);
app.component('editar-reportes', Editar);
app.component('crear-reportes', Crear);


app.mount('#app');
