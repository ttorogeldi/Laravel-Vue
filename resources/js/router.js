import vueRouter from 'vue-router'
import Vue from 'vue'
import exampleComponent from "./components/ExampleComponent";

Vue.use(vueRouter)

const routes = [
    {
        path: '/t',
        component: exampleComponent
    }
]



export default new vueRouter(
    {
        mode: 'history',
        routes
    }
)
