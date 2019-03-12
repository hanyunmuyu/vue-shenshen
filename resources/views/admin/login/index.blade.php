<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/lte/components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/lte/componentsfont-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/lte/componentsIonicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/lte/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/lte/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script src="/lte/components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/lte/components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/lte/plugins/iCheck/icheck.min.js"></script>
    <script src="/lte/plugins/jquery-validation/dist/jquery.validate.js"></script>
    <script src="/lte/plugins/jquery-validation/dist/localization/messages_zh.js"></script>
    <script>

        $().ready(function () {
            $("#login-username").validate({
                submitHandler: function (form) {
                    // $(form).ajaxSubmit();
                    if ($("#login-username").validate()) {
                        $.ajax({
                            url: '/doLogin',
                            method: 'post',
                            data: $("form").serialize(),
                            success: function (d) {
                                if (d.code == 200) {
                                    window.location.href = '/'
                                } else {
                                    alert(d.msg)
                                }
                            }
                        })
                    }
                }
            });
            $("#login-code").validate({
                submitHandler: function (form) {
                    if ($("#login-code").validate()) {
                        $.ajax({
                            url: '/doLogin',
                            method: 'post',
                            data: $("form").serialize(),
                            success: function (d) {
                                if (d.code == 200) {
                                    window.location.href = '/'
                                } else {
                                    alert(d.msg)
                                }
                            }
                        })
                    }
                }
            });
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/admin">{{config('app.name')}}</a>
    </div>

    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#username" data-toggle="tab">手机号登录</a></li>
                <li><a href="#code" data-toggle="tab">验证码登录</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="username">
                    <form id="login-username">
                        @csrf
                        <div class="form-group has-feedback">
                            <input type="text" name="username" class="form-control" placeholder="用户名或者手机号" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" name="password" class="form-control" placeholder="密码" minlength="4"
                                   maxlength="20"
                                   required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="code">
                    <!-- The timeline -->
                    <form action="/login" method="post" id="login-code">
                        @csrf
                        <div class="form-group has-feedback">
                            <input type="text" name="mobile" class="form-control" placeholder="手机号" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="code" class="form-control" placeholder="验证码" required>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" id="codeBtn" class="btn btn-primary btn-block btn-flat">
                                        点击获取验证码
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>

    <!-- /.login-logo -->
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
<script>
    $(function () {
        var timer;
        var count = 60;
        $('#codeBtn').click(function () {

            if (timer == undefined) {
                timer = setInterval(function () {
                    count--;
                    $('#codeBtn').text(count + '秒后重新发送')
                    if (count <= 0) {
                        count = 60;
                        $('#codeBtn').text('点击获取验证码')
                        clearInterval(timer);
                        timer = undefined;
                    }
                    //
                }, 1000);
            } else {
                return;
            }
            $.ajax({
                url: '/login/sendCode',
                method: 'post',
                data: {
                    _token: $('input[name="_token"]').val(),
                    mobile: $('input[name="mobile"]').val()
                },
                success: function (d) {

                }
            })
        })
    })
</script>

</body>
</html>
