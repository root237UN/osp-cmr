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
    <!-- Icons -->

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <style>
        .divider-form {
            position: relative;
            text-align: center;
            border-top: 1px solid #cbd2d6;
            position: relative;
            text-align: center;
        }

        .text-divider {
            background-color: #fff;
            padding: 0 .5em;
            position: relative;
            color: #6c7378;
            top: -.7em;
        }

        .btn-app {
            background-color: #243a5e;
            color: #fff;
        }

        .btn-register {
            background-color: #E1E7EB;
            color: #2C2E2F;
        }

        .logo-login {
            width: 100px;
            height: 100%;
            background-size: 100%;
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 20px;
            color: #fff;
        }

        .card {
            border: 0px;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px;
        }

        .card-header {
            background-image: url(../images/bg-section.png);
            background: linear-gradient(45deg, #464646, #243a5e);
            border: 0px;
        }

        .form-control,
        .form-control:focus {
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            border-color: transparent;
        }

        input,
        input:focus {
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            border-color: transparent;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body style="background-color: #243a5e ;">
    <div id="app">
        <header class="bg-cover">

        </header>

        <main class="py-4">
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
