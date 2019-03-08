<template>
    <div>
        <mu-appbar style="width: 100%;" color="blue" center>
            <mu-tabs :value.sync="active" full-width class="nav-scroll">
                <mu-tab>全部</mu-tab>
                <mu-tab>体育</mu-tab>
                <mu-tab>音乐</mu-tab>
                <mu-tab>绘画</mu-tab>
                <mu-tab>学习</mu-tab>
                <mu-tab>考研</mu-tab>
            </mu-tabs>
            <mu-button icon slot="right" @click="search">
                <mu-icon value="search"></mu-icon>
            </mu-button>
        </mu-appbar>

        <div class="demo-text" v-if="active === 0">
            <div v-for="cat in 10" :key="cat">
                <mu-flex align-items="center" style="margin: 6px 0">
                    <mu-flex><h5>球类</h5></mu-flex>
                    <mu-flex align-items="center" justify-content="end" fill @click="more">
                        <mu-flex>
                            更多
                        </mu-flex>
                        <mu-flex>
                            <mu-icon value="keyboard_arrow_right"></mu-icon>
                        </mu-flex>
                    </mu-flex>
                </mu-flex>
                <mu-grid-list class="grid-list-inline" :cols="3">
                    <mu-grid-tile v-for="(tile, index) in list" :key="index">
                        <img :src="tile.image">
                        <span slot="title">{{tile.title}}</span>
                        <span slot="subTitle">{{tile.school}}</span>
                    </mu-grid-tile>
                </mu-grid-list>
            </div>
        </div>
        <div class="demo-text" v-if="active === 1">
            <p>“我的心从来没有这么坚定过，所以我会为了补偿而死，也可以为了补偿而死……一辈子，急辈子都无所谓，我绝不后退！”</p>
            <p>“如果我后退呢？如果我想要死呢？我不想你再次背对着我逃跑了……”</p>
            <p>“那么就去地狱找到你，我绝对不逃！”</p>
            <p>“白痴，你也哭了？因为那些软弱拖累你的脚步？”</p>
        </div>
        <div class="demo-text" v-if="active === 2">
            <p>“不，这泪水……是因为勇气，因为力量，因为信任，……你不会懂的！”</p>
            <p>“我不会帮你，想要什么样的未来……自己去追寻吧！”</p>
            <p>“我不需要你的帮忙！未来我会一手开启，什么样的敌人我也不会惧怕……还有，其实我们可以成为朋友的……”</p>
            <p>“也许吧，未来……给你了。”</p>
        </div>
    </div>
</template>

<script>
    import breakfast from '../../assets/images/kkx.jpg';

    export default {
        name: "Index",
        data() {
            return {
                active: 0,
                list: [
                    {
                        image: breakfast,
                        title: '足球',
                        school: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '足球',
                        school: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '足球',
                        school: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '足球',
                        school: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '足球',
                        school: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '足球',
                        school: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '足球',
                        school: '河南工业大学'
                    }
                ]
            };
        },
        methods: {
            search() {
                this.$router.push('/search')
            },
            more() {
                console.log('more');
            }
        }
    }
</script>

<style scoped lang="scss">
    .nav-scroll {
        width: 100%;
        overflow-x: auto;
        white-space: nowrap;
    }

    .demo-text {
        padding: 16px;
        background: #fff;

        p {
            margin: 8px 0;

        }
    }

    .grid-list-inline {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
    }

</style>
