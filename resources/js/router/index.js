import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    { path: '/', component: () => import('../views/Home.vue') },
    { path: '/login', component: () => import('../views/Login.vue') },
    { path: '/register', component: () => import('../views/Register.vue') },
    { path: '/knives', component: () => import('../views/Knives.vue') },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;