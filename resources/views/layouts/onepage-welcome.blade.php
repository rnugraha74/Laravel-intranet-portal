<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <!-- Part: all meta-related contents -->

    @include('partials.onepage-head-meta')

    <!-- Part: site title with default value in parent -->
    @section('head-title')
        <title>{{ config('app.name', 'Laravel') }}</title>
    @stop

    <!-- Styles -->
    @include('partials.onepage-head-styles')
    
</head>
<body class="hold-transition skin-blue layout-top-nav">
  <div class="wrapper">
      <!-- Header -->  
      @include('partials.onepage-header')

      <!-- Content -->
      @yield('content')

      <!-- Footer -->
      @include('partials.onepage-footer')
  </div>
  @include('partials.onepage-body-scripts')
</body>
</html>
