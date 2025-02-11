import {createRouter, createWebHistory} from 'vue-router';
import CreateUpdateEvent from '../components/Admin/CreateUpdateEvent.vue';
import EventRegistration from '../components/Attendee/EventRegistration.vue';

const routes = [
    // Admin Routes
    {
        path: '/admin/create',
        component: CreateUpdateEvent,
        props: {isCreate: true},
    },
    {
        path: '/admin/:eventId/edit',
        component: CreateUpdateEvent,
        props: {isCreate: false},
    },

    // Attendee Routes
    {
        path: '/attendee/register/:eventId',
        component: EventRegistration,
        props: true,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
