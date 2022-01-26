require('./bootstrap');

window.Vue = require('vue').default;
     
import vClickOutside from 'v-click-outside';  
import VueTelInput from 'vue-tel-input';
import 'vue-tel-input/dist/vue-tel-input.css';

Vue.component('application', require('./components/Container.vue').default);

Vue.use(vClickOutside);
Vue.use(VueTelInput);

const app = new Vue({
    el: '#entorn-vue',
});

