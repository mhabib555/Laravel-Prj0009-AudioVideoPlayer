import VueRouter from "vue-router";

const routes = [
    { 
        path: '/', 
        component: require('./components/dashboard.vue').default 
    },
    { 
        path: '/home', 
        component: require('./components/dashboard.vue').default 
    },
    { 
        path: '/audiostreaming', 
        component: require('./components/AudioStreaming.vue').default 
    },
    { 
        path: '*', 
        component: require('./components/notFound.vue').default 
    },
];

export default new VueRouter({
    base: '/',
    mode: 'history',
    routes,
    linkActiveClass: 'active',
});
