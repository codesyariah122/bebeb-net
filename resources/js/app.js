/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import App from './App.vue'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import axios from 'axios'
import VueMoment from 'vue-moment'
import VueMeta from 'vue-meta'
import moment from 'moment-timezone'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faChevronCircleUp,faUserSecret,faTrash,faEye,faEdit,faSearch,faFemale,faMale } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import { routes } from './routes'
library.add(faChevronCircleUp, faUserSecret,faTrash,faEye,faEdit,faSearch,faFemale,faMale)

Vue.use(VueRouter)
Vue.use(VueAxios, axios)
Vue.use(VueSweetalert2)
Vue.use(VueMoment, {
    moment,
})

Vue.use(VueMeta, {
  keyName: 'head'
})

Vue.component('font-awesome-icon', FontAwesomeIcon)


const router = new VueRouter({
    mode: 'history',
    routes: routes
})
 
const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
})