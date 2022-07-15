<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" />

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <header class="bg-cover" >
            @include('partials.navbar-home')

            @yield('content-header')
        </header>

        @yield('content-body')
    </div>

    @include('partials.footer')

    @stack('scripts')
</body>

</html>
