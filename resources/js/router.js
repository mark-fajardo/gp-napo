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
          path: '/items',
          name: 'items',
          component: require('./components/ItemsComponent.vue').default
        },
        {
          path: '/categories',
          name: 'categories',
          component: require('./components/CategoriesComponent.vue').default
        },
        {
          path: '/items/add',
          name: 'add-items',
          component: require('./components/forms/AddItemsComponent.vue').default
        },
        {
          path: '/categories/add',
          name: 'add-categories',
          component: require('./components/forms/AddCategoryComponent.vue').default
        }
    ]
});