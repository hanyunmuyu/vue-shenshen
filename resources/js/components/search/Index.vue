<template>
    <div>
        <mu-appbar color="lightBlue">
            <mu-button icon slot="left" @click="goBack">
                <mu-icon value="keyboard_arrow_left"></mu-icon>
            </mu-button>
            <div class="search-input">
                <input>
                <mu-icon value="search"></mu-icon>
            </div>
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

<style scoped lang="scss">
    .search-input {
        display: flex;
        justify-content: center;
        align-items: Center;

        input {
            height: 60%;
            width: 100%;
            margin-right: 8px;
        }
    }
</style>
