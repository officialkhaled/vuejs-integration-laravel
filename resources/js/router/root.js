import {createRouter, createWebHistory} from "vue-router";

import Dashboard from '../components/Invoices/Dashboard.vue'
import NotFound from '../components/Invoices/NotFound.vue'

const routes = [
    {
        path: '/home',
        component: Dashboard
    },
    {
        path: '/:pathMatch(.*)*',
        component: NotFound
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
