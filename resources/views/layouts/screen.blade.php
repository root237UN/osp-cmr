<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Orientation | OSP - Cameroun</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Icons -->

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive-mobile.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="bg-cover">
            @include('partials.navbar-home')

            {{-- <div class="container-fluid" id="description">
                <div class="row">

                    <div class="col-md-7 col-12" data-aos="zoom-in-down">
                        <div id="banner-text">
                            <div>
                                <div class="title-1">
                                    <h1>{{ $content->libelle }}</h1>
                                </div>
                                <div style="text-align: justify;" class="p site-text my-4 body">
                                    <p>{{ $content->description }}</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start bounce hidden-mobile" style="align-items: center;">
                                <a id="documentation-link" class="btn bounce text-uppercase" style="font-weight: bold;"
                                    href="#"> <i class="fas fa-2x fa-book"></i></a>
                                <a href="{{ route('orientation') }}"
                                    class="text-orientation ml-5 site-text ">Orientez-vous ici </a>
                            </div>

                            <div class="d-flex justify-content-start hidden-web align-items-center">
                                <a id="documentation-link" class="btn text-uppercase fw-bold" href="#">
                                    <i class="fas fa-2x fa-book"></i>
                                </a>
                                <a href="{{ route('orientation') }}"
                                    class="text-orientation ms-5 site-text">Orientez-vous ici </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 hidden-mobile col-12">
                        <div>
                            <p class="text-center title-1-1 text-white text-option">Optez pour </p>
                        </div>
                        <div class="flex-row d-flex justify-content-between">
                            <div class="card site-text-medium">
                                <a href="{{ route('orientation.metier') }}">
                                    <div class="card-side front">
                                        <div>
                                            <p><span>un</span> metier</p>
                                        </div>
                                    </div>
                                    <div class="card-side back">
                                        <div>
                                            <p><span>un</span> parcours</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card site-text-medium card-1">
                                <a href="{{ route('orientation.formation') }}">
                                    <div class="card-side front">
                                        <div>
                                            <p><span>une</span> formation</p>
                                        </div>
                                    </div>
                                    <div class="card-side back">
                                        <div>
                                            <p><span>un</span> parcours</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card site-text-medium">
                                <a href="{{ route('orientation.ecole') }}">
                                    <div class="card-side front">
                                        <div>
                                            <p><span>une</span> école</p>
                                        </div>
                                    </div>
                                    <div class="card-side back">
                                        <div>
                                            <p><span>un</span> centre</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            @yield('content-header')
        </header>

        {{-- <section id="platform-highlights" class="bg-light">
            <div class="container-fluid px-0 mt-4"
                style="margin-top: -60px;    background: transparent; position: relative;">
                <ul>


                    <li @class([
                            'item',
                            'card-cover',
                            'h-100',
                            'overflow-hidden',
                            'card-page' => 4 % 2 == 0,
                            'card-default' => 5 % 2 == 1 && 3 != 1,
                            'rounded-5',
                        ]) data-aos="zoom-out-right">
                            <div>
                                <a href="#">
                                    <div class="title-2">
                                        <h4 class="card-header">"$sub->libelle" </h4>
                                    </div>
                                </a>
                                <p class="card-body site-text"> "$sub->description" </p>
                            </div>
                            <div class="decor-card"></div>
                        </li>

                </ul>
            </div>
        </section> --}}
    </div>

    @include('partials.footer')
</body>

</html>
