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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <main class="py-0">
            @yield('content')
        </main>
    </div>
    <footer class="footer">
        <div class="sub-footer" id="sub-footer">
            <div class="u-wrapper" style="font-size: 11px;">
                <p class="copyright m-0 py-2">©&nbsp;KCorp Systems&nbsp;2021&nbsp;|&nbsp;<a href="/mentions-legales.php">Mentions légales</a>&nbsp;|&nbsp;<a href="/plan-du-site.php">Plan du site</a>&nbsp;|&nbsp;<a href="/index?tpl=2" target="_blank" rel="nofollow">Imprimer</a>&nbsp;|&nbsp;Mise à jour :&nbsp;21/07/2021</p>
            </div>
        </div>
    </footer>
</body>

</html>
