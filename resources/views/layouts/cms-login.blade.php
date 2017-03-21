<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  @include('partials.cms-head-meta')

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Tell the browser to be responsive to screen width -->
  @include('partials.cms-head-meta')
  
  <!-- CSRF Token -->
  @include('partials.cms-head-csrf-token')

  <!-- Styles -->
  @include('partials.cms-head-styles')
  
  <!-- Scripts -->
  @include('partials.cms-head-scripts')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page">

  @yield('content')

  @include('partials.cms-body-scripts')
  
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>
</html>
