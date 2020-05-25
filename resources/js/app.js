require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Gate from './gate.js';
import router from './routes';
import { Form, HasError, AlertError } from 'vform';
import VueProgressBar from 'vue-progressbar';
import Swal from 'sweetalert2';
import Amplitude from 'amplitudejs';
window.Amplitude = Amplitude;

window.Vue = Vue;
Vue.prototype.$gate = new Gate(window.user);
window.Form = Form;
window.swal = Swal;
window.Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
window.fireEvent = new Vue();
Vue.use(VueRouter);
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '10px'
});

//filters 
Vue.filter('capitalaizeFirstText', text => {
    return text.chartAt(0).toUpperCase() + text.slice(1);
});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
// Vue.component('not-found', require('./components/notFound.vue').default);
Vue.component('not-found', require('./components/notFound.vue').default);

const app = new Vue({
    el: '#app',
    router
});
