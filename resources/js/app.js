/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/index.css';
 

window.Vue = require('vue');
Vue.use(VueToast);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('nav-bar', require('./components/NavBarComponent.vue').default);
Vue.component('side-bar', require('./components/SideBarComponent.vue').default);
Vue.component('dashboard', require('./components/DashboardComponent.vue').default);

// Under Graphs
Vue.component('line-graph', require('./components/graphs/LineComponent.vue').default);
Vue.component('dashboard-card', require('./components/graphs/CardComponent.vue').default);

// Under Subs
Vue.component('products-btns', require('./components/subcomponents/ProductsBtnGroupComponent.vue').default);
Vue.component('table-sub', require('./components/subcomponents/TableComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = require('./router').default;

const app = new Vue({
    el: '#app',
    router,
});
