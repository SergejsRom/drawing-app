import { createRouter, createWebHistory } from 'vue-router'

import DrawsIndex from '@/components/draws/DrawsIndex.vue'

const routes = [
    {
        path: '/dashboard',
        name: 'draws.index',
        component: DrawsIndex
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})