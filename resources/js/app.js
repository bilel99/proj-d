import Vue from 'vue'
import Router from './router'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')
require('select2/dist/js/select2.min')
require('smartwizard/dist/js/jquery.smartWizard.min')

Vue.component('hero-banner-component', require('./components/HeroBannerComponent.vue').default);
Vue.component('message-alert-component', require('./components/MessageAlertComponent.vue').default);
Vue.component('page-component', require('./components/PageComponent.vue').default);
Vue.component('service-component', require('./components/ServiceComponent.vue').default);
Vue.component('price-component', require('./components/PriceComponent.vue').default);
Vue.component('medical-house-component', require('./components/MedicalHouseComponent.vue').default);
Vue.component('information-component', require('./components/InformationComponent.vue').default);
Vue.component('detail-page-component', require('./components/DetailPageComponent.vue').default);
Vue.component('horaire-component', require('./components/HoursComponent.vue').default);

const app = new Vue({
    el: '#app',
})
