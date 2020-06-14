import Vue from 'vue'
import VueRouter from 'vue-router'
import Homepage from "./pages/Homepage";
import Appointment from "./pages/Appointment";
import Price from "./pages/Price";

const base = document.querySelector('#app')

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')
require('select2/dist/js/select2.min')
require('smartwizard/dist/js/jquery.smartWizard.min')

Vue.use(VueRouter)

const routes = [
    { path: '*', component: Homepage },
    { path: '/', name: 'homepage', component: Homepage },
    { path: '/comment-prendre-un-rendez-vous', name: 'appointment', component: Appointment },
    { path: '/tarifs', name: 'prices', component: Price }
]

/**
 * Initialise Vue Router Framework
 * @type {VueRouter}
 */
const router = new VueRouter({
    mode: 'history',
    routes,
    base: base.getAttribute('data-base')
})

/**
 * Add Component Vue
 */
Vue.component('hero-banner-component', require('./components/HeroBannerComponent.vue').default);
Vue.component('message-alert-component', require('./components/MessageAlertComponent.vue').default);
Vue.component('page-component', require('./components/PageComponent.vue').default);
Vue.component('service-component', require('./components/ServiceComponent.vue').default);
Vue.component('price-component', require('./components/PriceComponent.vue').default);
Vue.component('medical-house-component', require('./components/MedicalHouseComponent.vue').default);
Vue.component('information-component', require('./components/InformationComponent.vue').default);
Vue.component('detail-page-component', require('./components/DetailPageComponent.vue').default);
Vue.component('horaire-component', require('./components/HoursComponent.vue').default);

/**
 * Initialise Vue Framework
 */
new Vue({
    el: '#app',
    router
})
