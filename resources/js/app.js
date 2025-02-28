import './bootstrap';

import {createApp} from 'vue';

import app from '../js/components/App.vue';

import router from './router/router.js';

createApp(app).use(router).mount('#app')
