import Vue from 'vue';
import Router from "vue-router";

import Home from "../views/Home";
import Settings from "../views/Settings";
import PageNotFound from "../views/PageNotFound";

Vue.use(Router);

export default new Router({
  mode: "history",

  routes: [
    {
      path: '/',
      alias: '/home',
      name: 'home',
      component: Home
    },
    {
      path: '/settings',
      name: "Settings",
      component: Settings
    },
    {
      path: '/*',
      name: "404 Page Not Found",
      component: PageNotFound
    },
  ]
});
