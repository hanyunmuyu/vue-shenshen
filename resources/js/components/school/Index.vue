<template>
    <div>
        <mu-appbar style="width: 100%;" color="blue" center>
            <mu-tabs :value.sync="active" center>
                <mu-tab>动态</mu-tab>
                <mu-tab>校园</mu-tab>
                <mu-tab>校友</mu-tab>
            </mu-tabs>
            <mu-button icon slot="right" @click="search">
                <mu-icon value="search"></mu-icon>
            </mu-button>
        </mu-appbar>

        <div class="demo-text" v-if="active === 0">
            <p>
                “……是的，我承认从很早以前我都害怕死亡，在医院里被人研究的时候，以前做出布局的时候，其实我很怕死的，因为除了死以外，我没有值得珍惜的东西，很奇怪是吧？恰好是这样我真的很怕死，因为我想要有值得珍惜的东西之后，死亡之后才会不寂寞，我才能够安然的面对死亡……”
            </p>
        </div>
        <div class="demo-text" v-if="active === 1">
            <p>“我的心从来没有这么坚定过，所以我会为了补偿而死，也可以为了补偿而死……一辈子，急辈子都无所谓，我绝不后退！”</p>
            <p>“如果我后退呢？如果我想要死呢？我不想你再次背对着我逃跑了……”</p>
            <p>“那么就去地狱找到你，我绝对不逃！”</p>
            <p>“白痴，你也哭了？因为那些软弱拖累你的脚步？”</p>
        </div>
        <div class="demo-text" v-if="active === 2">
            <mu-list>
                <mu-list-item v-for="index in 20" :key="index" avatar>
                    <mu-list-item-action>
                        <mu-avatar>
                            <img src="../../assets/images/kkx.jpg">
                        </mu-avatar>
                    </mu-list-item-action>
                    <mu-list-item-content>
                        <mu-list-item-title>寒云{{index}}</mu-list-item-title>
                        <mu-list-item-sub-title>河南工业大学</mu-list-item-sub-title>
                    </mu-list-item-content>
                    <mu-list-item-action>
                        <mu-flex align-items="center" justify-content="end" fill>
                            <mu-flex>
                                围观
                            </mu-flex>
                            <mu-flex>
                                <mu-icon value="keyboard_arrow_right" right></mu-icon>
                            </mu-flex>
                        </mu-flex>
                    </mu-list-item-action>
                </mu-list-item>
            </mu-list>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SchoolIndex",
        data() {
            return {
                active: 2
            };
        },
        methods: {
            search() {
                this.$router.push('/search')
            }
        }
    }
</script>

<style scoped lang="scss">
    .demo-text {
        padding: 16px;
        background: #fff;

        p {
            margin: 8px 0;

        }
    }

    .demo-list-wrap {
        width: 100%;
        max-width: 360px;
    }
</style>
