// router.js
import { createRouter, createWebHistory } from 'vue-router'
import Inicio from './views/inicio.vue'
import Dashboard from './views/dashboard.vue'

const routes = [
  { path: '/', component: Inicio },
  { path: '/inicio-alumno', component: Dashboard },
  // Agrega más rutas según sea necesario
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
