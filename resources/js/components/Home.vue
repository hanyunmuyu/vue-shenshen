<template>
    <div>
        <div style="margin-bottom: 30px">
            <router-view></router-view>
        </div>
        <div class="footer">
            <app-footer></app-footer>
        </div>
    </div>
</template>

<script>
    import AppFooter from './common/AppFooter'

    export default {
        name: "Home",
        components: {AppFooter}
    }
</script>

<style lang="scss">
    #app {
        width: 100%;
        height: 100%;
    }

    .footer {
        bottom: 0;
        position: fixed;
        width: 100%;
    }

    .fixed {
        position: fixed;
        top: 0;
        margin: 0 auto;
        width: 100%;
    }
</style>
