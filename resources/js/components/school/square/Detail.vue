<template>
    <div>
        <mu-appbar color="lightBlue">
            <mu-button icon slot="left" @click="goBack">
                <mu-icon value="keyboard_arrow_left"></mu-icon>
            </mu-button>
            <mu-flex justify-content="center">
                <mu-flex justify-content="center">
                    动态详情
                </mu-flex>
            </mu-flex>
        </mu-appbar>
        <mu-container>
            <mu-flex align-items="center">
                <mu-flex>
                    <mu-avatar>
                    </mu-avatar>
                </mu-flex>
                <mu-flex class="flex-demo">
                    hanyun
                </mu-flex>
                <mu-flex justify-content="end" fill>
                    <mu-flex>
                        <mu-button small round color="blue">
                            关注
                        </mu-button>
                    </mu-flex>
                </mu-flex>
            </mu-flex>
            <mu-flex>
                我得意的笑我得意的笑我得意的笑
            </mu-flex>
            <div style="text-align: center">
                <img v-for="i in 3" style="width: 100%;padding: 2px"
                     src="https://www.baidu.com/img/xinshouye_e6412034ac5864cf40ca6ab99782883b.gif"
                     :key="i">
            </div>
            <mu-flex align-items="center" justify-content="center">
                <mu-flex justify-content="left" fill>
                    <mu-icon value="thumb_up" size="18"></mu-icon>
                    111
                </mu-flex>
            </mu-flex>
        </mu-container>

    </div>
</template>

<script>
    export default {
        name: "Detail",
        methods: {
            goBack() {
                this.$router.back();
            }
        }
    }
</script>

<style scoped>

</style>
