/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')
require('select2/dist/js/select2.min')
require('smartwizard/dist/js/jquery.smartWizard.min')


window.Vue = require('vue')

Vue.component('hero-banner-component', require('./components/HeroBannerComponent.vue').default);

/*const app = new Vue({
    el: '#app',
});*/

const heroBanner = new Vue({
    el: '#heroBanner',
})
