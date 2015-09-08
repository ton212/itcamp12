<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ITCAMP #12 Backend</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('backend_assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('backend_assets/adminlte/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('main_assets/img/favicon.ico') }}" rel="icon" >

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>ITCAMP</b>#12
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
          </div>
        @endif
        <form method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="ชื่อผู้ใช้" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="รหัสผ่าน" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"> จำการเข้าสู่ระบบ
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-success btn-block btn-flat">เข้าสู่ระบบ</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('backend_assets/plugins/jQuery/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('backend_assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{ asset('backend_assets/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
  </body>
</html>
