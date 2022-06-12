import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import Redirect from "../views/Redirect.vue";

const routes = [
    { path: "/", component: Home },
    {
        path: "/shortcut",
        component: Redirect,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});
// router.beforeEach((to, from, next) => {

// });

export default router;
