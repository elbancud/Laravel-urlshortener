import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";

const routes = [{ path: "/main", component: Home }];

const router = createRouter({
    history: createWebHistory(),
    routes,
});
// router.beforeEach((to, from, next) => {

// });

export default router;
