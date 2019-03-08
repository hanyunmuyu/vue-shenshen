<template>
    <div>
        <mu-appbar color="primary">
            <p slot="default" style="text-align: center">我</p>
            <mu-button icon slot="right">
                <mu-icon value="settings"></mu-icon>
            </mu-button>
        </mu-appbar>
        <mu-container style="margin-top: 6px">
            <mu-flex class="flex-wrapper" align-items="center">
                <mu-flex class="flex-demo">
                    <mu-avatar :size="size">
                        <img :src="user.avatar">
                    </mu-avatar>
                </mu-flex>
                <mu-flex class="flex-demo">
                    {{user.name}}
                </mu-flex>
                <mu-flex @click="userCenter" class="flex-demo" justify-content="end" fill>
                    <mu-flex>
                        个人主页
                        <mu-icon value="keyboard_arrow_right"></mu-icon>
                    </mu-flex>
                </mu-flex>
            </mu-flex>
        </mu-container>
        <mu-flex style="margin-top: 6px" align-items="center">
            <mu-flex class="flex-demo" justify-content="center" fill>
                100
                <br/>
                粉丝
            </mu-flex>
            <mu-flex class="flex-demo" justify-content="center" fill>
                100
                <br/>
                好友
            </mu-flex>
            <mu-flex class="flex-demo" justify-content="center" fill>
                100
                <br/>
                社团
            </mu-flex>
        </mu-flex>
    </div>
</template>

<script>
    export default {
        name: "Index",
        data() {
            return {
                size: 48,
                user: {
                    avatar: ''
                }
            }
        },
        methods: {
            userCenter() {
            }
        },
        mounted() {
            let user = this.$store.state.user;
            if (user === null) {
                this.$router.push('/login');
            } else {
                this.$data.user = user;
            }
        }
    }
</script>

<style scoped lang="scss">

</style>
