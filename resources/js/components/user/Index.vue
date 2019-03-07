<template>
    <div>
        <mu-appbar style="width: 100%;" color="primary">
            <mu-button icon slot="right">
                <mu-icon value="settings"></mu-icon>
            </mu-button>
        </mu-appbar>
        <mu-container style="margin-top: 6px">
            <mu-flex class="flex-wrapper" align-items="center">
                <mu-flex class="flex-demo">
                    <mu-avatar :size="size">
                        <img src="../../assets/images/kkx.jpg">
                    </mu-avatar>
                </mu-flex>
                <mu-flex class="flex-demo">
                    寒云
                </mu-flex>
                <mu-flex @click="userCenter" class="flex-demo" justify-content="end" fill>
                    <mu-flex>
                        个人主页
                        <mu-icon value="arrow_forward"></mu-icon>
                    </mu-flex>
                </mu-flex>
            </mu-flex>
        </mu-container>
        <mu-flex style="margin-top: 6px" align-items="center">
            <mu-flex class="flex-demo" justify-content="center" fill>
                粉丝.100
            </mu-flex>
            <mu-flex class="flex-demo" justify-content="center" fill>
                好友.100
            </mu-flex>
            <mu-flex class="flex-demo" justify-content="center" fill>
                社团.100
            </mu-flex>
        </mu-flex>
    </div>
</template>

<script>
    export default {
        name: "Index",
        data() {
            return {
                size: 48
            }
        },
        methods: {
            userCenter() {
                console.log('userCenter')
            }
        }
    }
</script>

<style scoped lang="scss">

</style>
