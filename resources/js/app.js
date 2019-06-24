/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('header-images', require('./components/HeaderImage.vue').default);
Vue.component('tag-navigation', require('./components/TagNavigation.vue').default);
Vue.component('welcome-header', require('./components/WelcomeHeader.vue').default);
Vue.component('welcome-icons', require('./components/WelcomeIcons.vue').default);
Vue.component('full-stack', require('./components/FullStack.vue').default);
Vue.component('about-me', require('./components/AboutMe.vue').default);
Vue.component('contact-form', require('./components/ContactForm.vue').default);
Vue.component('welcome-footer', require('./components/WelcomeFooter.vue').default);
Vue.component('blog-header', require('./components/BlogHeader.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
