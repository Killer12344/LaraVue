require('./bootstrap');

import router from "./routes";
import VueProgressBar from 'vue-progressbar';


window.Vue = require('vue').default;

//ProgressBar

Vue.use(VueProgressBar,{
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '2px'
});

// Vue Pagination Bar
Vue.component('pagination', require('laravel-vue-pagination'));

// Vue component
Vue.component('navbar-component',require('./components/NavbarComponent.vue').default);
Vue.component('article-component',require('./components/ArticleComponent.vue').default);
Vue.component('example', require('./components/ExampleComponent.vue').default);
Vue.component('about-component',require('./components/AboutComponent.vue').default);
Vue.component('contact-component',require('./components/ContactComponent').default);
Vue.component('category-component',require('./components/CategoryComponent').default);
Vue.component('article-detail-component',require('./components/ArticleDetailComponent').default);

const app = new Vue({
    el: '#app',
    router,
});
