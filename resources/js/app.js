import './bootstrap';
import { createApp } from "vue";
import App from "../src/App.vue"
import login from "../src/login.vue";
import inicio from "../src/inicio.vue";
import dashboard from "../src/dashboard.vue";
import secciones from "../src/secciones.vue";
import crudseccion from "../src/crudseccion.vue";

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

const crudseccionApp = createApp(crudseccion); // Cambiar "crudseccion" a "crudseccionApp" aquí
crudseccionApp.mount("#crudseccion");

const router = createRouter({
    history: createWebHistory(),
    routes: [
      { path: '/', component: inicio }, // Cambiar "Inicio" a "inicio"



      // Otras rutas aquí
    ],
});

