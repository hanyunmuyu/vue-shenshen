import Vue from 'vue'
import Router from 'vue-router'
import Home from '../components/Home'
import SchoolIndex from '../components/school/Index'
import HomeIndex from '../components/home/Index'
import GroupIndex from '../components/group/Index'
import UserIndex from '../components/user/Index'
import SearchIndex from '../components/search/Index'

Vue.use(Router)
export default new Router({
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home,
            children: [
                {
                    path: '/',
                    component: HomeIndex,
                },
                {
                    path: '/school',
                    name: 'School',
                    component: SchoolIndex,
                },
                {
                    path: '/group',
                    name: 'Group',
                    component: GroupIndex,
                },
                {
                    path: '/user',
                    name: 'User',
                    component: UserIndex,
                }
            ]
        },
        {
            path: '/search',
            name: 'SearchIndex',
            component: SearchIndex,
        }
    ]
})
