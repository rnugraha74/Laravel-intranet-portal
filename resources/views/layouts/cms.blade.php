<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    @include('partials.cms-head-meta')

    @include('partials.cms-head-csrf-token')

    <title>CMS Login</title>

    <!-- Styles -->
    @include('partials.cms-head-styles')

    <!-- Scripts -->
    @include('partials.cms-head-scripts')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!--Header -->
      @include('partials.cms-header')

      <!-- Left sidebar -->
      @include('partials.cms-sidebar')

      <!-- Content -->
      @yield('content')

      <!--Control Sidebar -->
      @include('partials.cms-control-sidebar')

    </div>
    @include('partials.cms-body-scripts')
</body>
</html>
