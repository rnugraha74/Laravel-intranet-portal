<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  @include('partials.onepage-head-meta')

  <title>User Login</title>

  <!-- CSRF Token -->
  @include('partials.onepage-head-csrf-token')

  <!-- Styles -->
  @include('partials.onepage-head-styles')
  
  <!-- Scripts -->
  @include('partials.onepage-head-scripts')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page">

  @yield('content')

  @include('partials.onepage-body-scripts')
  
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
