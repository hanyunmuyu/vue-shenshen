<template>
    <div>
        {{$store.state.user}}
    </div>
</template>

<script>
    import api from '../../api';

    export default {
        name: "Index",
        mounted() {
            api.getNewsRecommend({a: 1})
        }
    }
</script>

<style scoped>

</style>
