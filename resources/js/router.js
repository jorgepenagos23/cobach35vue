import { createRouter, createWebHistory } from 'vue-router';

// Importa tus componentes de manera adecuada
import Inicio from '../src/components/inicio.vue';
import HomeView from '../src/components/HomeView.vue';
import MostrarPublicaciones from '../src/components/publicaciones/MostrarPublicaciones.vue';
import Crear from '../src/components/publicaciones/Crear.vue';
import Editar from '../src/components/publicaciones/Editar.vue';
import Login from '../src/components//sistema/login.vue'; // Ajusta la ubicación según la estructura de tu proyecto
import Navegation from '../src/components//sistema/Navegation.vue'; // Ajusta la ubicación según la estructura de tu proyecto
import navegacion from '../js/Componentes/navegacion.vue'; // Ajusta la ubicación según la estructura de tu proyecto
import dashboard from "../src/components/sistema/dashboard.vue";
import banner from '../src/components/banner.vue';

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
    name: 'CrearPublicacion',
    path: '/crear',
    component: Crear
  },
  {
    name: 'EditarPublicacion',
    path: '/editar/:id',
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
    component: dashboard


  },
  {
    name: 'banner',
    path: '/banner',
    component: banner


  }


];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
