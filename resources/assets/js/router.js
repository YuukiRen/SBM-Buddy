import VueRouter from 'vue-router'
// Pages
import Home from './pages/Home'
import Register from './pages/Register'
import Login from './pages/Login'
import Dashboard from './siswa/Dashboard'
import AdminDashboard from './admin/Dashboard'

let PilihMapel = require('./siswa/PilihMapel.vue');
let Pemanasan = require('./siswa/Pemanasan.vue');
let Pembahasan = require('./siswa/Pembahasan.vue');
let Progress = require('./siswa/Progress.vue');
let PassingGrade = require('./siswa/PassingGrade.vue');

let Paketsoal = require('./admin/Paketsoal.vue');
let Soal = require('./admin/Soal.vue');
let Pesan = require('./admin/Pesan.vue');
let Universitas = require('./admin/Universitas.vue');

// Routes
const routes = [
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
    {
      path: '/pembahasan',
      name: 'pembahasan',
      component: Pembahasan,
      meta: {
        auth: true
      }
    },
    {
      path: '/pemanasan',
      name: 'pemanasan',
      component: Pemanasan,
      meta: {
        auth: true
      }
    },
    {
      path: '/pilihmapel',
      name: 'pilihmapel',
      component: PilihMapel,
      meta: {
        auth: true
      }
    },
    {
      path: '/passinggrade',
      name: 'passinggrade',
      component: PassingGrade,
      meta: {
        auth: true
      }
    },
    {
      path: '/progress',
      name: 'progress',
      component: Progress,
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
    {
      path: '/soal',
      name: 'soal',
      component: Soal,
      meta: {
        auth: {roles: 2, redirect: {name: 'login'}, forbiddenRedirect: '/403'}
      }
    },
    {
      path: '/pesan',
      name: 'pesan',
      component: Pesan,
      meta: {
        auth: {roles: 2, redirect: {name: 'login'}, forbiddenRedirect: '/403'}
      }
    },
    {
      path: '/universitas',
      name: 'universitas',
      component: Universitas,
      meta: {
        auth: {roles: 2, redirect: {name: 'login'}, forbiddenRedirect: '/403'}
      }
    },
    {
      path: '/paketsoal',
      name: 'paketsoal',
      component: Paketsoal,
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