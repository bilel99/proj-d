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
<body>
<div id="app"
     data-base-api="{{ config('docteurs_gardes.api_base_url') }}"
     data-asset="{{ asset('front') }}"
     data-homepage-url="{{ route('front.homepage') }}"
     data-appointement-url="{{ route('front.appointement') }}"
     data-prices-url="{{ route('front.prices') }}"
     data-contacts-url="{{ route('front.contacts') }}">
    <main>
        @include('front.layouts.partials._header')

        @yield('content')

        @include('front.layouts.partials._footers')

        <!-- floating button -->
        <a href="#" id="back-to-top" class="btn-float">
            <i class="fas fa-arrow-up position-center" style="color: white;"></i>
        </a>
    </main>
</div>
</body>
</html>
