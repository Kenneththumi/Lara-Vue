
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.VueRouter = require('vue-router').default;

window.VueAxios = require('vue-axios').default;

window.Axios = require('axios').default;

let AppLayout = require('./components/App.vue');

//show Listposts template
const Listposts= Vue.component('Listposts',require('./components/Listposts.vue'));

//show Addpost template
const Addpost= Vue.component('Addpost',require('./components/Addpost.vue'));

//show Editpost template
const Editpost= Vue.component('Editpost',require('./components/Editpost.vue'));

//show Deletepost template
const Deletepost= Vue.component('Deletepost',require('./components/Deletepost.vue'));

//show Viewpost template
const Viewpost= Vue.component('Viewpost',require('./components/Viewpost.vue'));

// registering modules
Vue.use(VueRouter, VueAxios, Axios);

//const router = new VueRouter({ mode:'history', routes:routes});

const routes = [
    {
        name:'Listposts',
        path:'/',
        component:Listposts
    },
    {
        name:'Addpost',
        path:'/add-post',
        component:Addpost
    },
    {
        name:'Editpost',
        path:'/edit/:id',
        component:Editpost
    },
    {
        name:'Deletepost',
        path:'/post-delete',
        component:Deletepost
    },
    {
        name:'Viewpost',
        path:'/view/:id',
        component:Viewpost
    }
];

const router = new VueRouter({mode: 'history', routes:routes})

new Vue(
    Vue.util.extend(
        { router },
        AppLayout
    )
).$mount('#app');





















/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });
