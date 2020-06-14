import Vue from 'vue'
import VueRouter from 'vue-router'
import PageAppointment from "./pages/PageAppointment";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        //{ path: '*', component: NotFoundComponent }
        { path: '/' },
        { path: '/comment-prendre-un-rendez-vous', component: PageAppointment },
    ]
})