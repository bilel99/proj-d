<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/629711cf8f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <script src="{{ asset('global/js/app.js') }}" defer></script>
    <script src="{{ asset('admin/js/sb-admin-2.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('admin/css/sb-admin-2.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div id="app">
        @yield('content')
    </div>
</div>
</body>

</html>
