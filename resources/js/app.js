
require('./bootstrap');

import Vue from 'vue'


import VueSimpleAlert from "vue-simple-alert";
import 'sweetalert2/src/sweetalert2.scss'
Vue.use(VueSimpleAlert);

Vue.use(require('vue-moment'));


import VueToast from 'vue-toast-notification';
// Import one of available themes
import 'vue-toast-notification/dist/theme-default.css';
import 'vue-toast-notification/dist/theme-sugar.css';

Vue.use(VueToast);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('welcome', require('./components/welcome').default);

const app = new Vue({
    el: '#app',
});
