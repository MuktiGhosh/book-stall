require('./bootstrap');
require('./components/adminComponent');

import Vue from 'vue'

//ziggy
Vue.mixin({
    methods: {
        route: route
    }
});

import "bootstrap/dist/css/bootstrap.css";

//VeeValidate
import VeeValidate from 'vee-validate';
// fields prop of VeeValidate conflicts with BootstrapVue, so changed it to 'veeFields'
Vue.use(VeeValidate, { fieldsBagName: 'veeFields' });

//BootstrapVue
import { BootstrapVue } from 'bootstrap-vue'
Vue.use(BootstrapVue)

const app = new Vue({
    el: '#app',
});
