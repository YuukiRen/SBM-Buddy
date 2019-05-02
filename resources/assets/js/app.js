
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import 'es6-promise/auto'
import axios from 'axios'
import './bootstrap'
import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import auth from './auth'
import router from './router'
import Vue from 'vue'
import VueRouter from 'vue-router'
import Index from './Index'

require('./bootstrap');
// Set Vue globally
window.Vue = Vue

// Set Vue router
Vue.router = router
Vue.use(VueRouter)

let Myheadera = require('./admin/Myheader.vue');
let Myheaders = require('./siswa/Myheader.vue');
let Myfooter = require('./admin/Myfooter.vue');



// Set Vue authentication
Vue.use(VueAxios, axios)
axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api`
Vue.use(VueAuth, auth)
// Load Index
Vue.component('index', Index)

const app = new Vue({
    el: '#app',
    router,
    components:{Myheadera,Myheaders, Myfooter}
});

