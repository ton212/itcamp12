<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    @yield('css')

    <link href="{{ asset('backend_assets/adminlte/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend_assets/adminlte/css/skins/skin-green.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('backend_assets/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="skin-green layout-top-nav">

    <div class="wrapper">

      @include('backend.nav')

      <div class="content-wrapper">
        @if(isset($page_title))
        <section class="content-header">
          <h1>{{ $page_title or "" }} <small>{{ $page_subtitle or "" }}</small></h1>
          @yield('breadcrumbs')
        </section>
        @endif

        <section class="content">
          @include('backend.alert')
          @yield('content')
        </section>
      </div>

      <footer class="main-footer">
        <div class="pull-right hidden-xs"><span class="text-muted">King Mongkut's Institute of Technology Ladkrabang</span></div>
        <strong><a href="http://www.itcamp.in.th/12">ITCAMP #12</a></strong> Backend System
      </footer>

    </div>

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('backend_assets/plugins/jQuery/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('backend_assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend_assets/adminlte/js/app.min.js') }}" type="text/javascript"></script>

    @yield('js')
  </body>
</html>
