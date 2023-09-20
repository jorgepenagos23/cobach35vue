// router.js
import { createRouter, createWebHistory } from 'vue-router'
import inicio from "../src/components/inicio.vue";
import HomeView from "../src/components/HomeView.vue";

const inicio =()=> import('./src/componenets/inicio.vue');
const HomeView =()=> import('./src/componenets/HomeView.vue');


//// importamos componentes para plubicaciones
const MostrarPublicaciones =()=> import('./src/componenets/publicaciones/MostrarPublicaciones.vue');
const Crear =()=> import('./src/componenets/publicaciones/Crear.vue');
const Editar =()=> import('./src/componenets/publicaciones/Editar.vue');



export const routes = [
        {
                    name: 'home',
                    path: '/home'
                    component:HomeView

        },

        {
            name: 'inicio',
            path: '/inicio'
            component:Inicio

        },

        {
            name: 'MostrarPublicaciones',
            path: '/MostrarPublicaciones'
            component:MostrarPublicaciones

        },

        {
            name: 'CrearPublicacion',
            path: '/crear'
            component:Crear

        },

        {
            name: 'EditarPublicacion',
            path: '/editar/:id'
            component:Editar

        },


];
