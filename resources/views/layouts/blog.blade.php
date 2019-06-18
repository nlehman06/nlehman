<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="font-serif antialiased">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@yield('meta')

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/styles/sunburst.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Taviraj:400,400i|Work+Sans&display=swap" rel="stylesheet">
</head>
<body class="bg-blue-900 text-white">
<div id="app">

    <header class="my-10">
        <div class="container mx-auto px-5 lg:max-w-4xl">
            <h1 class="text-center font-thin">
                <a href="/blog" class="no-underline">Nathan Lehman's Journal</a>
            </h1>
            <span class="text-center block italic text-blue-300 mt-4 text-sm">
                Web developer, family man and reluctant fitness enthusiast.
            </span>
            <tag-navigation :tags="{{ $tags }}"></tag-navigation>
        </div>
    </header>

    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>