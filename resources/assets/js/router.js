import VueRouter from 'vue-router'
// Pages
import Home from './pages/Home'
import Register from './pages/Register'
import Login from './pages/Login'
import Dashboard from './siswa/Dashboard'
import AdminDashboard from './admin/Dashboard'

let Paketsoal = require('./admin/Paketsoal.vue');
let Soal = require('./admin/Soal.vue');
let Pesan = require('./admin/Pesan.vue');
let Universitas = require('./admin/Universitas.vue');

// Routes
const routes = [
  
    { path: '/paketsoal', component: Paketsoal },
    { path: '/soal', component: Soal },
    { path: '/pesan', component: Pesan },
    { path: '/universitas', component: Universitas },
    {
      path: '/',
      name: 'home',
      component: Home,
      meta: {
        auth: undefined
      }
    },
    {
      path: '/register',
      name: 'register',
      component: Register,
      meta: {
        auth: false
      }
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
      meta: {
        auth: false
      }
    },
    // USER ROUTES
    {
      path: '/dashboard',
      name: 'dashboard',
      component: Dashboard,
      meta: {
        auth: true
      }
    },
    // ADMIN ROUTES
    {
      path: '/admin',
      name: 'admin.dashboard',
      component: AdminDashboard,
      meta: {
        auth: {roles: 2, redirect: {name: 'login'}, forbiddenRedirect: '/403'}
      }
    },
  ]
  
const router = new VueRouter({
  history: true,
  mode: 'history',
  routes,
})
export default router