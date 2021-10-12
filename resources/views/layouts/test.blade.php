<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | Orientation</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}?_={{rand(1000,2000)}}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?_={{rand(1000,2000)}}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wrapper.css') }}" rel="stylesheet">
    @livewireStyles
    @yield('css')
</head>

<body>
    <div id="app">
        <div class="container-fluid p-0">
            <div class="row m-0">

                <div class="col-md-2">
                    <div class="btn-close-sidebar">
                        <i class="fas fa-bars"></i>
                    </div>
                    @include('partials.sidebar')
                </div>
                <main class="py-2 col-md-8 ">
                    @yield('content')
                </main>

                <div class="col-md-2">
                    <div class="sidebar-right">
                        <div class="header-sidebar-right">
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-xs btn-logout" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                    Deconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>

                        <div class="user-profil my-4">
                            <div class="user-img d-flex flex-row justify-content-center">
                                <img class="img img-fluid" src="../images/bg6.jpg" />
                            </div>
                            <div class="user-name text-center my-2">
                                <p class="my-0">Emmanuel Ivan</p>
                                <span>Admin</span>
                            </div>
                        </div>

                        <div class="remainder mb-3 px-2">
                            <div class="flex-row d-flex justify-content-between">
                                <p class="remainder-title">Rappels</p>
                                <i class="fas fa-bell"></i>
                            </div>
                            <div class="remainder-list">
                                <ul>
                                    <li class="flex-row d-flex">
                                        <span class="alert alert-warning">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </span>
                                        <div class="flex-column d-flex justify-content-between">
                                            <p class="mb-0">Titre du rappel</p>
                                            <span class="remainder-day">Lundi 14 Mars 2020</span>
                                        </div>
                                    </li>
                                    <li class="flex-row d-flex">
                                        <span class="alert alert-danger">
                                            <i class="fas fa-users"></i>
                                        </span>
                                        <div class="flex-column d-flex justify-content-between">
                                            <p class="mb-0">Titre du rappel</p>
                                            <span class="remainder-day">Lundi 14 Mars 2020</span>
                                        </div>
                                    </li>
                                    <li class="flex-row d-flex">
                                        <span class="alert alert-success">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </span>
                                        <div class="flex-column d-flex justify-content-between">
                                            <p class="mb-0">Titre du rappel</p>
                                            <span class="remainder-day">Lundi 14 Mars 2020</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="result px-2">
                            <div class="flex-row d-flex justify-content-between">
                                <p class="remainder-title">Resultats</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts

    <script>
        $('.btn-close-sidebar').click(function() {
            $(this).toggleClass('click');
            $('.sidebar-left').toggleClass('show');
        });
        $('.btn-etablissement').click(function() {
            $('.sidebar-menu  ul .sub-menu-etablissement').toggleClass("show");
            $('.sidebar-menu  ul .caret').toggleClass("rotate");
        });
        $('.sidebar-menu ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });
        $('.close-card').click(function() {
            $('.card-welcome').toggleClass('hidden');
        });

        window.livewire.on('EcoleAjouter',()=>{
            $('#addEcoleModal').modal('hide');
        });
    </script>

    @stack('scripts')

</body>

</html>
