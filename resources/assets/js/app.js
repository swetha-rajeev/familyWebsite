
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// var slug = require('slug');
// slug.defaults.modes = "rfc3986";
// var print = console.log.bind(console, '>');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

// import $ from 'jquery'
// import 'fullcalendar'
// import 'fullcalendar/dist/fullcalendar.css'

// $(document).ready(() => {
//   $('#calendar').fullCalendar()
// })
