import { createRouter, createWebHistory } from 'vue-router';

import Login from '../pages/auth/login.vue';
//import Dashboard from '../pages/dashboard/dashboard.vue';

const routes = [
    {
        path: '/login',
        component: Login,
        meta: {
            title: 'Login',
        },
    },
    /*{
        path: '/dashboard',
        component: Dashboard,
        meta: {
            title: 'Dashboard',
        },
    },*/
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.afterEach((to) => {
    document.title = to.meta.title
        ? `${to.meta.title} | Inventory++`
        : 'Inventory++';
});

export default router;
