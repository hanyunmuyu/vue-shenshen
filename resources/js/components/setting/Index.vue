<template>
    <div>
        <mu-button @click="logout" full-width color="primary" to="/">退出</mu-button>
    </div>
</template>

<script>
    export default {
        name: "Index",
        methods: {
            logout() {
                this.$store.dispatch('logout');
            }
        }
    }
</script>

<style scoped>

</style>
