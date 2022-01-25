import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const Home = () => import('../pages/Home.vue')
// const Category = () => import('../pages/Category.vue')


const Routes = [
    {
        name:"home",
        path:"/",
        component:Home
    },
    // {
    //     name:"category",
    //     path:"/category",
    //     component:Category
    // },
]

var router  = new VueRouter({
    mode: 'history',
    routes: Routes
})

export default router