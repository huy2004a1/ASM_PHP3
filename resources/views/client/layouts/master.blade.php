<!DOCTYPE html>

<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>Reader | Hugo Personal Blog Template</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Hugo 0.74.3" />

  <!-- theme meta -->
  <meta name="theme-name" content="reader" />

  <!-- plugins -->
  @include('client.layouts.partials.css')


  <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>

<body>
  <!-- navigation -->
  <header class="navigation fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-white">
        @include('client.layouts.partials.header-logo')

        @include('client.layouts.partials.header-nav')

        @include('client.layouts.partials.header-timkiem')

      </nav>
    </div>
  </header>
  <!-- /navigation -->

  @yield('content')


  <footer class="footer">
    @include('client.layouts.partials.footer')

  </footer>
  <!-- JS Plugins -->
  @include('client.layouts.partials.js')

</body>

</html>