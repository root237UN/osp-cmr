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
        .sidebar-left{
            height: auto;
            min-height: 600px;
            border: 1px solid red;
        }
        .sidebar-left *{
            border: 1px solid green;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="container-fluid p-0">
            <div class="col-md-2">
                <div class="sidebar-left">
                    <div class="header-sidebar-left">
                        <p class="text-center">
                            <span>Orientation</span>
                        </p>
                    </div>
                    <div class="body-sidebar-left">
                        <div class="body-content-left">
                            <nav class="sidebar-menu">
                                <ul>
                                    <li>
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#">Orientation</a>
                                    </li>
                                    <li>
                                        <a href="#">Enseignement</a>
                                    </li>
                                    <li>
                                        <a href="#">Formation</a>
                                    </li>
                                    <li>
                                        <a href="#">Etablissement</a>
                                        <ul>
                                            <li><a href="#">Ecole</a></li>
                                            <li><a href="#">Structure</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <i class="fas fa-comment-alt"></i>
                                        <a href="#">Forum</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-cogs"></i>
                                        <a href="#">Parametre</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <main class="py-4">

            </main>
                <div class="col-md-3">


                </div>
            </div>
        </div>
    </div>
</body>

</html>
