<template>
    <div>
        <mu-appbar color="lightBlue">
            <mu-button icon slot="left" @click="goBack">
                <mu-icon value="arrow_back"></mu-icon>
            </mu-button>
            <mu-text-field placeholder="输入内容搜索" solo full-width>

            </mu-text-field>
        </mu-appbar>
    </div>
</template>

<script>
    export default {
        name: "SearchIndex",
        methods: {
            goBack() {
                this.$router.back();
            }
        }
    }
</script>

<style scoped>

</style>
