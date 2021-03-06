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
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/">{{config('app.name')}}</a>
    </div>

    <ul id="myTab" class="nav nav-tabs">
        <li class="active">
            <a href="#home" data-toggle="tab">
                密码登录
            </a>
        </li>
        <li>
            <a href="#ios" class="btn" data-toggle="tab">
                验证码登录
            </a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="home">
            <div class="login-box-body">
                <form action="/doLogin" method="post">
                    @csrf
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="name" placeholder="用户名/手机号" required>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="密码" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
        </div>
        <div class="tab-pane fade" id="ios">
            <div class="login-box-body">
                <form action="/doLogin" method="post">
                    @csrf
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="用户名/手机号" required>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="密码" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                        <!-- /.col -->
                    </div>
                </form>
            </div>

        </div>
    </div>


    <!-- /.login-logo -->
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/lte/components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/lte/components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/lte/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
