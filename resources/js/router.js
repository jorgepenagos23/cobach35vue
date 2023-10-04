import { createRouter, createWebHistory } from 'vue-router';

// Importa tus componentes de manera adecuada
import Inicio from '../src/components/inicio.vue';
import HomeView from '../src/components/HomeView.vue';
import MostrarPublicaciones from '../src/components/reportes/MostrarPublicaciones.vue';

import Login from '../src/components//sistema/login.vue'; // Ajusta la ubicación según la estructura de tu proyecto
import navegacion from '../js/Componentes/navegacion.vue'; // Ajusta la ubicación según la estructura de tu proyecto
import banner from '../js/Componentes/banner.vue'; // Ajusta la ubicación según la estructura de tu proyecto

import dashboard from "../src/components/sistema/dashboard.vue";
import "../css/dist/js/bootstrap.bundle";
import "../css/dist/css/bootstrap.css";


import TablaReportes from '../src/components/reportes/TablaReportes.vue';
import Crear from '../src/components/reportes/Crear.vue';
import Editar from '../src/components/reportes/Editar.vue';




import Alumnos from '../src/components/alumnos/MostrarAlumnos.vue'
import TablaAlumnos from '../src/components/alumnos/TablaAlumnos.vue'

import CrearPublicaciones from '../src/components/publicaciones/Crear.vue';
import EditarPublicaciones from '../src/components/publicaciones/Editar.vue';
import TablaPublicaciones from '../src/components/publicaciones/TablaPublicaciones.vue';



const routes = [

  {
    name: 'home',
    path: '/home',
    component: HomeView
  },
  {
    name: 'inicio',
    path: '/inicio',
    component: Inicio
  },
  {
    name: 'MostrarPublicaciones',
    path: '/MostrarPublicaciones',
    component: MostrarPublicaciones
  },
  {
    name: 'CrearReporte',
    path: '/crear-reportes',
    component: Crear
  },
  {
    name: 'EditarReporte',
    path: '/editar-reportes',
    component: Editar
  },

  {
    name: 'Login',
    path: '/login',
    component: () => import('../src/components/sistema/login.vue'), // Ejemplo de carga diferida


  },

  {
    name: 'Navegation',
    path: '/Navegation',
    component: navegacion


  },
  {
    name: 'dashboard',
    path: '/dashboard',
    component: dashboard,



  },

  {
    name: 'banner',
    path: '/banner',
    component: banner,


  },

  {

    name: 'EditarPublicaciones',
    path: '/editar-publicaciones',
    component:EditarPublicaciones




  },


  {
    name: 'CrarPublicaciones',
    path: '/crear-publicaciones',
    component:CrearPublicaciones
  },


  {
    name: 'TablaPublicaciones',
    path: '/tabla-publicaciones',
    component:TablaPublicaciones

  },


  {
    name: 'MostrarAlumnos',
    path: '/alumnos',
    component: Alumnos

  },

  {
    name: 'TablaAlumnos',
    path: '/tabla-alumnos',
    component: TablaAlumnos

  },

  {

    name: 'TablaReportes',
    path: '/tabla-reportes',
    component: TablaReportes



  },


  {

    name: 'MostrarSecciones',
    path: '/tabla-secciones',
    component: () => import('../src/components/secciones/MostrarSeccion.vue'),



  },


  {
    name:'IndexAlumno',
    path: '/index-alumno',
    component: () => import('../src/components/usuarios/VistaAlumno.vue'),

  },





];


const router = createRouter({
  history: createWebHistory(),
  routes
});



export default router;
