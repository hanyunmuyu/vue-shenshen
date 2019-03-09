<template>
    <div>
        <mu-appbar color="lightBlue">
            <mu-button icon slot="left" @click="goBack">
                <mu-icon value="keyboard_arrow_left"></mu-icon>
            </mu-button>
            <mu-flex justify-content="center">
                <mu-flex justify-content="center">
                    <mu-text-field full-width placeholder="输入内容搜索" solo>
                    </mu-text-field>
                </mu-flex>
            </mu-flex>
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
