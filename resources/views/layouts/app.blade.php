<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Junge&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">

    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filiere.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">

    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
    <link href="{{ asset('css/orientation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">

    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top-navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top-content.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive-mobile.css') }}" rel="stylesheet">

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        .logo-welcome {
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 20px;
    font-style: italic;
    color: #243a5e;
    position: absolute;
    top: -12px;
}
.logo-welcome::first-letter {
    font-size: 50px;
    color: #243a5e;
}

header.bg-cover #navbarSupportedContent li > a {
    color: #243a5e;
    text-shadow: 2px 2px 9px rgba(255, 255, 255, 0.22);
    padding: 10px 13px;
    display: inline-block;
    top: 3px;
    position: relative;
    height: 43px;
    border: 1px solid transparent;
     font-family: 'MTNBrighterSans-Regular',sans-serif;
    cursor: pointer;
    font-size: 11px;
}
header.bg-cover #navbarSupportedContent li.nav-item.active {
    background-color: #243a5e;
    border-radius: 7px;
}
header.bg-cover #navbarSupportedContent li.nav-item.active a {
    color: #fff;
}
header.bg-cover #navbarSupportedContent li.nav-item.active span {
    display: none;
}

header.bg-cover #navbarSupportedContent li {
    padding-left: 5px;
    padding-right: 5px;
}

header.bg-cover #navbarSupportedContent li:hover a {
    color: #243a5e;
}

header.bg-cover #navbarSupportedContent li:hover span.decor-link-menu {
    transform: scale(1);
}
.decor-link-menu {
    width: 80%;
    left: 12px;
    background-color: #243a5e;
    position: relative;
    height: 2px;
    top: -5px;
    display: block;
    transform: scale(0);
    transition: all ease-in 350ms;
}
    </style>
    @livewireStyles
    @yield('css')
</head>

<body>
    <div id="app">
        <header class="bg-cover">
            @include('partials.navbar-home')

        </header>
        <main class="flex-shrink-0">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    @stack('scripts')
    @include('partials.footer')
    @stack('script-carte')
</body>

</html>
