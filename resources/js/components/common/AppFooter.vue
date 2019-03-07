<template>
    <mu-container>
        <mu-bottom-nav :value.sync="home" @change="change">
            <mu-bottom-nav-item value="/" to="/" title="首页" icon="home"></mu-bottom-nav-item>
            <mu-bottom-nav-item value="/school" to="/school" title="高校" icon="school"></mu-bottom-nav-item>
            <mu-bottom-nav-item value="/group" to="/group" title="社团" icon="group"></mu-bottom-nav-item>
            <mu-bottom-nav-item value="/user" to="/user" title="我的" icon="person"></mu-bottom-nav-item>
        </mu-bottom-nav>
    </mu-container>
</template>

<script>
    export default {
        name: "AppFooter",
        data() {
            return {
                home: '/'
            }
        },
        methods: {
            change(v) {
                this.$data.home = v;
            }
        },
        watch: {
            $route(to, from) {
                this.$data.home = this.$route.path;
                console.log(this.$data.home);
            }
        },
        mounted() {
            this.$data.home = this.$route.path;
            console.log(this.$route.path);
        }
    }
</script>

<style scoped>

</style>
