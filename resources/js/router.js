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
          path: '/orders',
          name: 'orders',
          component: require('./components/OrdersComponent.vue').default
        },
        {
          path: '/customers',
          name: 'customers',
          component: require('./components/CustomersComponent.vue').default
        },
        {
          path: '/reports',
          name: 'reports',
          component: require('./components/OrdersComponent.vue').default
        },
        {
          path: '/archived',
          name: 'archived',
          component: require('./components/ArchivedComponent.vue').default
        },
        {
          path: '/items/add',
          name: 'add-items',
          component: require('./components/forms/AddItemsComponent.vue').default
        },
        {
          path: '/items/update',
          name: 'update-items',
          component: require('./components/forms/UpdateItemComponent.vue').default,
          props: true
        },
        {
          path: '/categories/add',
          name: 'add-categories',
          component: require('./components/forms/AddCategoryComponent.vue').default
        },
        {
          path: '/categories/update',
          name: 'update-categories',
          component: require('./components/forms/UpdateCategoryComponent.vue').default,
          props: true
        }
    ]
});