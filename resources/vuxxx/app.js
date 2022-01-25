require('./bootstrap');

window.Vue = require('vue').default;
     
import vClickOutside from 'v-click-outside';  
import VueTelInput from 'vue-tel-input';
import 'vue-tel-input/dist/vue-tel-input.css';
import router from './router';
import store from './store';

Vue.component('application', require('./App.vue').default);

Vue.use(vClickOutside);
Vue.use(VueTelInput);

const app = new Vue({
    el: '#entorn-vue',
    router:router,
    store:store
});

