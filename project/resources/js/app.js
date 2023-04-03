// import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

require('./bootstrap');

require('alpinejs');

import { createApp } from 'vue';
import router from './router'

import DrawsIndex from '@/components/draws/DrawsIndex.vue';

createApp({
    components: {
        DrawsIndex
    }
}).use(router).mount('#app')
