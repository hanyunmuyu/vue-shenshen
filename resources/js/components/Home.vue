<template>
    <div v-scroll.sync="scroll">
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
        data() {
            return {
                scrollTop: 0,
                startY: 0,
                timer: null
            }
        },
        methods: {
            scroll() {
                this.scrollTop = window.scrollY;
                if (this.timer === null) {
                    this.timer = setTimeout(() => {
                        clearTimeout(this.timer);
                        this.timer = null;
                    }, 2000);
                }
            }

        },
        mounted() {
            this.scrollTop = window.scrollY;
        },
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
