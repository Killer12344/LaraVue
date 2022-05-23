import Vue from 'vue';
import VueRouter from 'vue-router';


import ExampleComponent from "./components/ExampleComponent";
import ArticleComponent from "./components/ArticleComponent";
import AboutComponent from "./components/AboutComponent";
import ContactComponent from "./components/ContactComponent";
import ArticleDetailComponent from "./components/ArticleDetailComponent";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path : '/',
            component : ArticleComponent,
        },
        {
            path : '/example',
            component : ExampleComponent,
        },
        {
            path : '/about',
            component : AboutComponent,
        },
        {
            path : '/contact',
            component : ContactComponent,
        },
        {
            path : '/detail/:id',
            component : ArticleDetailComponent,
        },
    ]

});

export default router;
