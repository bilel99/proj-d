<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/front/css/app.css') }}">
    </head>
    <body class="ecl-error d-flex flex-column align-items-center justify-content-center">
        <img src="{{asset('front/img/logos/logo.png')}}" alt="Logo">
        <div class="bg-code">
            <p> @yield('code', __('Oh no'))</p>
        </div>

        <div class="code">
            @yield('code', __('Oh no')) | <span>@yield('message')</span>
        </div>

        <div class="btn-action">
            @yield('btn')
        </div>
    </body>
</html>
