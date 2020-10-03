

require('./bootstrap');

window.Vue = require('vue');

Vue.component('Inicio', require('../views/Inicio.vue').default);

import Chartkick from 'vue-chartkick';
import Chart from 'chart.js';

Vue.use(Chartkick.use(Chart));

const app = new Vue({
  el: '#app',
});
