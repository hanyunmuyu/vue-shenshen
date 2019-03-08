<template>
    <div>
        <mu-container>
            <mu-appbar color="lightBlue">

            </mu-appbar>

            <mu-form ref="form" :model="validateForm" class="mu-form">
                <mu-form-item label="用户名" prop="username" :rules="usernameRules">
                    <mu-text-field v-model="validateForm.username" prop="username"></mu-text-field>
                </mu-form-item>
                <mu-form-item label="密码" prop="password" :rules="passwordRules">
                    <mu-text-field type="password" v-model="validateForm.password" prop="password"></mu-text-field>
                </mu-form-item>
                <mu-form-item prop="isAgree" :rules="argeeRules">
                    <mu-checkbox label="同意用户协议" v-model="validateForm.isAgree"></mu-checkbox>
                </mu-form-item>
                <mu-form-item>
                    <mu-button color="primary" @click="submit">登录</mu-button>
                    <mu-button @click="clear">重置</mu-button>
                </mu-form-item>
                <mu-flex justify-content="center" align-items="center">
                    <mu-button full-width color="primary" to="/">暂不登录，随便看看</mu-button>
                </mu-flex>
            </mu-form>
        </mu-container>
    </div>
</template>

<script>
    import api from '../../api'

    export default {
        name: "LoginIndex",
        data() {
            return {
                usernameRules: [
                    {validate: (val) => !!val, message: '必须填写用户名'},
                    {validate: (val) => val.length >= 3, message: '用户名长度大于3'}
                ],
                passwordRules: [
                    {validate: (val) => !!val, message: '必须填写密码'},
                    {validate: (val) => val.length >= 3 && val.length <= 10, message: '密码长度大于3小于10'}
                ],
                argeeRules: [{validate: (val) => !!val, message: '必须同意用户协议'}],
                validateForm: {
                    username: 'hanyun--0',
                    password: '123456',
                    isAgree: true
                }
            }
        },
        methods: {
            goBack() {

                this.$router.back();
            },
            login() {
                api.login({name: 'hanyun--0'}).then((d) => {
                    this.$data.user = d.data;
                    this.$store.dispatch('login', d.data);
                });
            },
            submit() {
                this.$refs.form.validate().then((result) => {
                    if (result) {
                        api.login(this.validateForm).then((v) => {
                            this.$store.dispatch('login', v.data);
                            this.$router.back();
                        });
                    }
                });
            },
            clear() {
                this.$refs.form.clear();
                this.validateForm = {
                    username: '',
                    password: '',
                    isAgree: false
                };
            }
        }
    }
</script>

<style scoped>
    .mu-form {
        width: 100%;
        height: 10px;
    }
</style>
