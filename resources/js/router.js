import {createWebHistory, createRouter} from "vue-router";
const routes = [
    {
        path: "/",
        name: "galaxys.index",
        component: () => import ('./components/galaxy/index.vue'),
    },
    {
        path: "/create",
        name: "galaxys.create",
        component: () => import ('./components/galaxy/create.vue'),
    },
    {
        path: "/:galaxy",
        name: "galaxys.solar",
        component: () => import ('./components/solar_system/index.vue'),
    },

];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
