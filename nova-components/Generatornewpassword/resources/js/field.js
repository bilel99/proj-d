Nova.booting((Vue, router, store) => {
    Vue.component('index-generatornewpassword', require('./components/IndexField'))
    Vue.component('detail-generatornewpassword', require('./components/DetailField'))
    Vue.component('form-generatornewpassword', require('./components/FormField'))
})
