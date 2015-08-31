<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ITCAMP #12 Link-Exchange</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{ asset('backend_assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <style>
      body {
        margin-top: 30px;
      }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      @if(Session::has('alert'))
        <div class="row">
          <div class="col-xs-12">
            <div class="alert alert-info">{{ Session::get('alert') }}</div>
          </div>
        </div>
      @endif
      @yield('content')
    </div>
  </body>
</html>