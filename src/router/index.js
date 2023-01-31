import { createRouter, createWebHistory } from "vue-router";
import Login from "../components/Login.vue";
import Capture from "../components/Capture.vue";
import Compare from "../components/Compare.vue";
import Edit from "../components/EditDetails.vue";

const routes = [
  {
    path: "/",
    name: "login",
    component: Login,
  },
  {
    path: "/Capture",
    name: "capture",
    component: Capture,
  },
  {
    path: "/Compare",
    name: "Compare",
    component: Compare,
  },
  {
    path: "/Edit",
    name: "Edit",
    component: Edit,
  },
  {
    path: "/Edit",
    name: "Edit",
    component: Edit,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
