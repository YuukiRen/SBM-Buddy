
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import VueRouter from 'vue-router'

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter)

let Myheader = require('./components/Myheader.vue');
let Myfooter = require('./components/Myfooter.vue');

let Soal = require('./components/Soal.vue');
let Pesan = require('./components/Pesan.vue');
let Universitas = require('./components/Universitas.vue');


const routes = [
  { path: '/soal', component: Soal },
  { path: '/pesan', component: Pesan },
  { path: '/universitas', component: Universitas }
]

const router = new VueRouter({
  //mode: 'history',
  routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router,
    components:{Myheader, Myfooter}
});
