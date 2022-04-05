<template>
    <div>
        <Header :app_name="app_name" :api_url="api_url" :app_key="app_key" :app_env="app_env"/>

        <router-view :api_url="api_url"  :app_key="app_key" :app_env="app_env" :app_url="app_url"></router-view>

        <Footer :app_name="app_name" :api_url="api_url" :app_key="app_key" :app_env="app_env"/>
    </div>
</template>
<script>
    import Header from './components/LayoutComponents/Header.vue'
    import Footer from './components/LayoutComponents/Footer.vue'

    export default {
        components: {
            Header,
            Footer
        },

        data(){
            return{
                app_name: process.env.MIX_APP_NAME,
                app_env: process.env.MIX_APP_ENV,
                api_url: process.env.MIX_API_URL,
                app_url: process.env.MIX_APP_URL,
                app_key: process.env.MIX_APP_KEY
            }
        },

        mounted(){
            console.log(this.app_name)
        }
    }
</script>