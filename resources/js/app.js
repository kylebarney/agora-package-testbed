require('./bootstrap');

require('alpinejs');

// import Vue from 'vue';

window.Vue = require('vue');

Vue.component('agora-video-display', require('./vendor/laravel-agora-api/components/AgoraVideoDisplay.vue').default);
Vue.component('agora-user-list', require('./vendor/laravel-agora-api/components/AgoraUserList.vue').default);
Vue.component('agora-incoming-call-alert', require('./vendor/laravel-agora-api/components/AgoraIncomingCallAlert.vue').default);

const app = new Vue({
    el: '#app'
});
