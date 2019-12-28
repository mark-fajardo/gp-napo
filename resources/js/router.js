import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {
          path: '/',
          name: 'dashboard',
          component: require('./components/DashboardComponent.vue').default
        },
        {
          path: '/products',
          name: 'products',
          component: require('./components/ProductsComponent.vue').default
        }
    ]
});