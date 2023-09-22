import { createRouter, createWebHistory } from 'vue-router';

// Importa tus componentes de manera adecuada
import Inicio from '../src/components/inicio.vue';
import HomeView from '../src/components/HomeView.vue';
import MostrarPublicaciones from '../src/components/publicaciones/MostrarPublicaciones.vue';
import Crear from '../src/components/publicaciones/Crear.vue';
import Editar from '../src/components/publicaciones/Editar.vue';
import Login from '../src/components//sistema/login.vue'; // Ajusta la ubicación según la estructura de tu proyecto

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
    component: Login //Importo el componente de inicio de sesion

  }



];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
