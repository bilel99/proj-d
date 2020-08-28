<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Société Docteur De Garde">
    <meta name="author" content="Docteur de garde">
    <meta name="keywords"
          content="
          Docteur de garde,
          docteur de garde,
          Docteur de garde Seine et Marne,
          docteur de garde Seine et Marne,
          docteur,
          docteur à Seine et Marne,
          docteur de nuit,
          docteur de nuit à Seine et Marne,
          médecin de nuit,
          médecin de nuit à Seine et Marne,
          médecin,
          médecin à Seine et Marne"
    >

    <!-- Icon -->
    <link rel="icon" type="image/png" href="{{ asset('front/img/logos/logo-icon.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <!--link rel="manifest" href="site.webmanifest"-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

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
        @if(isset($pages_is_empty) && $pages_is_empty)
            @include('front.layouts.partials._page_is_empty')
        @else
            {{-- Web layout --}}
            @include('front.layouts.partials._header')

            @yield('content')

            @include('front.layouts.partials._footers')

            <!-- floating button -->
            <a href="#" id="back-to-top" class="btn-float" title="retour en haut">
                <i class="fas fa-arrow-up position-center" style="color: white;"></i>
            </a>
        @endif
    </main>
</div>
</body>
</html>
