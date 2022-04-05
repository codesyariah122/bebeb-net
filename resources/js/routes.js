import HomeComponent from './components/HomeComponent.vue'
import AboutComponent from './components/AboutComponent.vue'
import ArticleComponent from './components/ArticleComponent.vue'

export const routes = [
    {
        name: 'home',
        path: '/',
        component: HomeComponent
    },
    {
        name: 'about',
        path: '/about',
        component: AboutComponent
    },
    {
        name: 'article-detail',
        path: '/article/:slug',
        component: ArticleComponent,
        props: true
    }
]