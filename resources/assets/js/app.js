
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
import moment from 'moment'
import {Tabs, Tab} from 'vue-tabs-component';

require('./bootstrap');
// Set Vue globally
window.Vue = Vue

// moment
Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).format('DD-MM-YYYY')
    }
});
Vue.filter('dayOfWeeks', function(value) {
    if (value) {
        var nameWeeks = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']
        return nameWeeks[moment(String(value)).day()]
    }
});
    
// Set Vue router
Vue.router = router
Vue.use(VueRouter)
Vue.component('tabs', Tabs);
Vue.component('tab', Tab);

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

