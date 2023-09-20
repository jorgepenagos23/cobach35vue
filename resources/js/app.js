import './bootstrap';
import { createApp } from "vue";
import App from "../src/components/publicaciones/App.vue"
import login from "../src/components/sistema/login.vue";
import inicio from "../src/components/inicio.vue";
import dashboard from "../src/components/sistema/dashboard.vue";
import secciones from "../src/secciones.vue";
import MostrarSeccion from "../src/components/secciones/MostrarSeccion.vue";

import { createRouter, createWebHistory } from 'vue-router';

import 'sweetalert2/dist/sweetalert2.css';
// Crea y monta la aplicación principal en #app
const app = createApp(App);
app.mount("#app");


const loginApp = createApp(login);
loginApp.mount("#login");

const inicioApp = createApp(inicio); // Cambiar "Login" a "inicio" aquí
inicioApp.mount("#inicio");

const dashApp = createApp(dashboard);
dashApp.mount("#dashboard");

const seccionesApp = createApp(secciones);
seccionesApp.mount("#secciones");

const MostrarSeccionApp = createApp(MostrarSeccion); // Cambiar "crudseccion" a "crudseccionApp" aquí
MostrarSeccionApp.mount("#MostrarSeccion");

const router = createRouter({
    history: createWebHistory(),
    routes: [
      { path: '/', component: inicio }, // Cambiar "Inicio" a "inicio"



      // Otras rutas aquí
    ],
});

