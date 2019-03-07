<template>
    <div>
        <router-view></router-view>
        <div class="footer">
            <app-footer></app-footer>
        </div>
    </div>
</template>

<script>
    import AppFooter from './common/AppFooter'

    export default {
        name: "Home",
        components: {AppFooter},
    }
</script>

<style scoped>
    #app {
        width: 100%;
        height: 100%;
    }

    .footer {
        bottom: 0px;
        position: fixed;
        width: 100%;
    }
</style>
