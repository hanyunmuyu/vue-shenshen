<template>
    <div>
        <mu-appbar :class="{fixed:scrollTop>100}" color="blue" center v-scroll.sync="scroll">
            <mu-tabs :value.sync="active" center>
                <mu-tab>校园</mu-tab>
                <mu-tab>广场</mu-tab>
                <mu-tab>校友</mu-tab>
            </mu-tabs>
            <mu-button icon slot="right" @click="search">
                <mu-icon value="search"></mu-icon>
            </mu-button>
        </mu-appbar>

        <div class="demo-text" v-if="active === 0">
            <mu-grid-list class="grid-list-inline" :cols="3">
                <mu-grid-tile v-for="(tile, index) in list" :key="index">
                    <img :src="tile.image">
                    <span slot="title">
                        {{tile.title}}
                    </span>
                    <span slot="subTitle">
                        {{tile.description}}
                    </span>
                </mu-grid-tile>
            </mu-grid-list>
        </div>
        <div class="demo-text" v-if="active === 1">
            <mu-list>

                <div @click="detail(index)" v-for="index in 20" :key="index" style="padding-bottom: 8px">
                    <mu-list-item avatar>
                        <mu-list-item-action>
                            <mu-avatar size="26">
                                <img src="../../assets/images/kkx.jpg">
                            </mu-avatar>
                        </mu-list-item-action>
                        <mu-list-item-content>
                            <mu-list-item-title>寒云--{{index}}</mu-list-item-title>
                            <mu-list-item-sub-title>53分钟以前</mu-list-item-sub-title>
                        </mu-list-item-content>
                        <mu-list-item-action>
                            <mu-flex align-items="center" justify-content="end" fill>
                                <mu-flex>
                                    <mu-icon value="more_vert" right></mu-icon>
                                </mu-flex>
                            </mu-flex>
                        </mu-list-item-action>
                    </mu-list-item>
                    <mu-flex>
                        我得意的笑我得意的笑我得意的笑
                    </mu-flex>
                    <div style="text-align: center">
                        <img v-for="i in 6" style="width: 33.3333%;padding: 2px" src="../../assets/images/kkx.jpg"
                             :key="i">
                    </div>
                    <mu-flex align-items="center" justify-content="center">
                        <mu-flex justify-content="center" fill>
                            <mu-icon value="thumb_up" size="18"></mu-icon>
                            111
                        </mu-flex>
                        <mu-flex justify-content="center" fill>
                            <mu-icon value="chat_bubble_outline" size="18"></mu-icon>
                            11
                        </mu-flex>
                    </mu-flex>
                    <mu-divider inset></mu-divider>
                </div>

            </mu-list>
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
    import breakfast from '../../assets/images/kkx.jpg';

    export default {
        name: "SchoolIndex",
        data() {
            return {
                active: 1,
                scrollTop: 0,
                list: [
                    {
                        image: breakfast,
                        title: '河南工业大学',
                        description: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '河南工业大学',
                        description: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '河南工业大学',
                        description: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '河南工业大学',
                        description: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '河南工业大学',
                        description: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '河南工业大学',
                        description: '河南工业大学'
                    },
                    {
                        image: breakfast,
                        title: '河南工业大学',
                        description: '河南工业大学'
                    }
                ]
            };
        },
        methods: {
            search() {
                this.$router.push('/search')
            },
            scroll() {
                this.scrollTop = window.scrollY;
            },
            detail(id) {
                this.$router.push({path: '/', query: {id: id}})
            }
        },
        mounted() {
            this.scrollTop = window.scrollY;
        }
    }
</script>

<style scoped lang="scss">
    .demo-text {
        padding: 0 16px;
        background: #fff;
    }

    .demo-list-wrap {
        width: 100%;
        max-width: 360px;
    }

    .fixed {
        position: fixed;
        top: 0;
        margin: 0 auto;
        width: 100%;
    }
</style>
