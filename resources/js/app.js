import Chartkick from 'vue-chartkick';
import Chart from 'chart.js';
import router from "./router";

window.Vue = require('vue');

Vue.use(Chartkick.use(Chart));

const app = new Vue({
  el: '#app',
  router,
});
