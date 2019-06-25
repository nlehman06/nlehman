<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @env('production')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142466428-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }

      gtag('js', new Date());

      gtag('config', 'UA-142466428-1');
    </script>
    @endenv

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@include('feed::links')
@yield('meta')

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nathan's Blog @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/styles/sunburst.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"/>

    <link href="https://fonts.googleapis.com/css?family=Orbitron:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
</head>
<body class="antialiased text-lg font-body text-blue-900">
<div id="app">
    <blog-header :tags="{{ $tags }}"></blog-header>

    <div class="-mt-48 z-10 relative">
        @yield('content')
    </div>

    <welcome-footer></welcome-footer>
</div>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>