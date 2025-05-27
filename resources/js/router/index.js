import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    { path: '/', component: () => import('../views/Home.vue') },
    { path: '/knives', component: () => import('../views/Home.vue') },
    { path: '/login', component: () => import('../views/Login.vue') },
    { path: '/register', component: () => import('../views/Register.vue') },
    { path: '/knife/:id', component: () => import('../views/Knife.vue') },
    { path: '/profile', component: () => import('../views/User.vue') },
    { path: '/logout', component: () => import('../views/Logout.vue') },
    { path: '/:pathMatch(.*)*', component: () => import('../views/NotFound.vue') },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;