<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142466428-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-142466428-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I'm a freelance full stack web application developer.
    I specialize in writing Laravel, VueJS and Tailwind css applications and sites.
    Other technologies I prefer are MySql, Nginx or Apache, git, and Python.
    I build using test driven development (TDD) with a focus on responsive, mobile first design.
    I'm located in Indiana in the Indianapolis region.">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.key') }}"></script>

    <style>
        .grecaptcha-badge {
            visibility: hidden;
        }
        .about-me-bg {
            background-image: url('/img/about-me-bg.svg');
            background-repeat: no-repeat;
            background-position: 48px 75%;
            background-size: 139%;
            -webkit-clip-path: polygon(0 0, 100% 0, 100% 98%, 70% 100%, 0 95%);
            clip-path: polygon(0 0, 100% 0, 100% 98%, 70% 100%, 0 95%);
        }

        @media (min-width: 640px) {
            .about-me-bg {
                background-image: url('/img/about-me-bg.svg');
                background-repeat: no-repeat;
                background-position: 210% 61%;
                background-size: 88%;
                -webkit-clip-path: polygon(0 0, 100% 0, 100% 95%, 70% 100%, 0 90%);
                clip-path: polygon(0 0, 100% 0, 100% 95%, 70% 100%, 0 90%);
            }
        }
    </style>

</head>
<body class="antialiased text-lg font-body text-blue-900">
<div id="app">

    <welcome-header></welcome-header>

    <welcome-icons></welcome-icons>

    <div class="bg-gray-300 about-me-bg">
        <full-stack></full-stack>
        <about-me></about-me>
    </div>

    <contact-form class="-mb-48 z-20" :site-key="'{{ config('services.recaptcha.key') }}'"></contact-form>

    <welcome-footer class="z-10"></welcome-footer>

</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
