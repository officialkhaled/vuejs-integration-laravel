import {createRouter, createWebHistory} from "vue-router";

import NotFound from '../components/Common/NotFound.vue';
import Dashboard from '../components/Common/Dashboard.vue';

import InvoiceList from '../components/Invoices/InvoiceList.vue';
import InvoiceCreate from '../components/Invoices/InvoiceCreate.vue';

const routes = [
    {
        path: '/:pathMatch(.*)*',
        component: NotFound
    },
    {
        path: '/home',
        component: Dashboard
    },
    {
        path: '/invoice-list',
        component: InvoiceList
    },
    {
        path: '/invoice-create',
        component: InvoiceCreate
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
