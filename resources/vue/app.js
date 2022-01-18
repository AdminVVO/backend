/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
     
import vClickOutside from 'v-click-outside';  
import VueTelInput from 'vue-tel-input';
import 'vue-tel-input/dist/vue-tel-input.css';



// import router from './router';
// import store from './store';

Vue.component('container', require('./components/Container.vue').default);
Vue.use(vClickOutside);
Vue.use(VueTelInput);


const app = new Vue({
    el: '#entorn-vue',
    // router:router,
    // store:store
});
