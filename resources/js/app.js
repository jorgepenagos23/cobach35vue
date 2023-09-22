
import { createApp } from 'vue';
import App from '../src/components/App.vue';
import login from "../src/components/sistema/login.vue";
import inicio from "../src/components/inicio.vue";
import dashboard from "../src/components/sistema/dashboard.vue";
import secciones from "../src/secciones.vue";
import MostrarSeccion from "../src/components/secciones/MostrarSeccion.vue";
import MostrarPublicaciones from "../src/components/publicaciones/MostrarPublicaciones.vue";
import './bootstrap';

import 'sweetalert2/dist/sweetalert2.css';

// IMPORTAMOS AXIOS
import VueAxios from 'vue-axios';
import axios from 'axios';

// Importamos y configuramos Vue Router
import { createWebHistory, createRouter } from 'vue-router'; // Asegúrate de importar createRouter correctamente
import router from './router'; // Importa tu archivo router.js

const app = createApp(App);

const loginApp = createApp(login);
loginApp.mount("#login");

const inicioApp = createApp(inicio); // Cambiar "Login" a "inicio" aquí
inicioApp.mount("#inicio");

const dashApp = createApp(dashboard);
dashApp.mount("#dashboard");

const seccionesApp = createApp(secciones);
seccionesApp.mount("#secciones");

const MostrarSeccionApp = createApp(MostrarSeccion); // Cambiar "crudseccion" a "crudseccionApp" aquí
MostrarSeccionApp.mount("#MostrarSeccion")

const MostrarPublicacionesApp = createApp(MostrarPublicaciones); // Cambiar "crudseccion" a "crudseccionApp" aquí
MostrarPublicacionesApp.mount("#MostrarPublicaciones")

app.use(VueAxios, axios);
app.use(router); // Usa el enrutador importado

app.mount('#app');
