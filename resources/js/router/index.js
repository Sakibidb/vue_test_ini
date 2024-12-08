import ListComponent from "../components/users/ListComponent.vue";
import {createRouter, createWebHistory} from "vue-router";
import AddComponent from "../components/users/AddComponent.vue";


const baseRoutes = [
    {
        path: "/",
        component: ListComponent,
        name: "user.list"
    },
    {
        path: "/user/add",
        component: AddComponent,
        name: "user.add"
    }
]

const routes = baseRoutes.concat();


const router = createRouter({
    linkActiveClass: "active",
    mode: 'history',
    history: createWebHistory(),
    routes,
    scrollBehavior() {
        return { left: 0, top: 0}
    }
});

export default router;