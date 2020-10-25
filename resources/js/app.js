require('./bootstrap');

window.Vue = require('vue')
import VueMultiselect from 'vue-multiselect';

Vue.component('categorie-component', require('./components/categorieComponent.vue').default)
Vue.component('select-component', require('./components/selectComponent.vue').default)

const app = new Vue({
    el: '#app'
});