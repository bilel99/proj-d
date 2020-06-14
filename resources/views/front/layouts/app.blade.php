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
<body class="sticky-footer">
    <div id="app"
         data-base-api="{{ config('docteurs_gardes.api_base_url') }}"
         data-base="{{ route('front.homepage', [], false) }}"
         data-asset="{{ asset('front') }}">
        <main>
            @include('front.layouts.partials._header')

            <!-- Router view Application SPA Vue.js Framework -->
            <router-view></router-view>

            <!-- floating button -->
            <a href="#" id="back-to-top" class="btn-float">
                <i class="fas fa-arrow-up position-center"></i>
            </a>
        </main>
    </div>
</body>
</html>
