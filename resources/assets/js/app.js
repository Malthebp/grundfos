
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 var Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('client', require('./components/Client.vue'));

Vue.component('pumppage', require('./components/pumppage.vue'));

Vue.component('users-clients', require('./components/UsersClients.vue'));
Vue.component('users-pumps', require('./components/UsersPumps.vue'));

const app = new Vue({
    el: '#app'
});
