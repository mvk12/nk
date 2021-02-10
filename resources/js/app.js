import './bootstrap';

import Vue from 'vue';
import router from './router';
import App from './App.vue';

console.log('App - ' + process.env.NODE_ENV);
console.dir(process.env);

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App),
});