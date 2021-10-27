<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | Orientation</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gelasio&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?_={{rand(1000,2000)}}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wrapper.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />



    <link rel="stylesheet" href="{{asset('datatable/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
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
                                <p class="my-0">admin Mac</p>
                                <span>Admin</span>
                            </div>
                        </div>

                        <div class="remainder mb-3 px-2">
                            <div class="flex-row d-flex justify-content-between">
                                <p class="remainder-title">Rappels</p>
                                <i class="fas fa-bell"></i>
                            </div>
                            <div class="remainder-list ">
                                <ul class="flex-column d-flex justify-content-between">
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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

        window.livewire.on('EcoleAjouter', () => {
            $('#addEcoleModal').modal('hide');
        });
        window.livewire.on('EcoleMisAJour', () => {
            $('#updateEcoleModal').modal('hide');
        });
        window.livewire.on('LocaliteAjouter', () => {
            $('#addLocaliteModal').modal('hide');
        });
    </script>

    @stack('scripts')

    <script src="{{asset('datatable/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('datatable/datatables-init.js')}}"></script>
</body>

</html>
