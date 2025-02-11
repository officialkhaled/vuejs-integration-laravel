import './bootstrap';

import router from 'router';
import {createApp} from 'vue';
import TestComponent from '../components/TestComponent.vue';

createApp(TestComponent).use(router).mount('#app');

// import { createApp } from 'vue';
// import App from './App.vue';
// import router from './router/index';
//
// const app = createApp(App);
// app.use(router);
// app.mount('#app');
