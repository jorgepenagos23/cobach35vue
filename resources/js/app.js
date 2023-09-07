// main vue inicio
import './bootstrap';
import { createApp } from "vue"

import App from "../src/App.vue"
import login from "../src/login.vue"
import inicio from "../src/inicio.vue"

// Crea y monta la aplicación principal en #app
const app = createApp(App);
app.mount("#app");

// Crea y monta la aplicación de inicio de sesión en #login
const loginApp = createApp(login); // Cambiar "Login" a "login" aquí
loginApp.mount("#login");


// Crea y monta la aplicación de inicio de sesión en #login
const index = createApp(inicio); // Cambiar "Login" a "login" aquí
loginApp.mount("#inicio");
