<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/629711cf8f.js" crossorigin="anonymous"></script>
    <script src="{{ asset('global/js/app.js') }}" defer></script>
    <script src="{{ asset('front/js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('front/css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div id="app">
        @yield('content')
    </div>
</div>
</body>

</html>
