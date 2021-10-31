//bootstrap
require('./bootstrap');



//Vue js
window.Vue = require('vue');



//Vuex
import Vuex from 'vuex'
Vue.use(Vuex)

import store_data from "./vuex_routers/store";
const store = new Vuex.Store(
    store_data,
);



// vFrom
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);



//vue routes
import VueRouter from 'vue-router';
Vue.use(VueRouter);



// vue routes
import {routes} from './vue_routes/routes';
const router = new VueRouter({
    routes,
    //mode: 'history',
});


//sweetalert
window.Swal = Swal;
import Swal from 'sweetalert2'



//Toast
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});
window.Toast = Toast;



//toastr
window.toastr = toastr;
import toastr from 'toastr';


// moments.js
import {filters} from "./filter/moment";

//vue mixins
import './helpers/mixin';


// form CKEditor er jonno
import CKEditor from '@ckeditor/ckeditor5-vue2';

Vue.use( CKEditor );

//Vue component
    //Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//import {Component} from './vueComponent/vuecomponent';




const app = new Vue({
    el: '#content',
    router,
    store

});
