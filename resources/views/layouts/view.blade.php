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
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <header class="bg-cover">
            <livewire:top-navbar-orientation />

            <div class="container-fluid" id="description">
                <div class="row">
                    <!--<div class="col-6 d-flex justify-content-center" data-aos="zoom-in-down">
                        <div class="description-logo mt-5">
                            <img src="images/bg3.jpg" style="height: 100%;width: 100%;border-radius:50%;border:none">
                        </div>
                    </div>-->
                    <div class="col-6" data-aos="zoom-in-down">
                        <div id="banner-text">
                            <div>
                                <h1 style="text-transform: capitalize;">La meilleure plateforme d’aide à l’orientation </h1>
                                <p style="text-align: justify;" class="p my-4 body">
                                    Une plateforme conçue pour pallier le déficit de conseillers d’orientation au sein de nos institutions scolaires et professionnelles afin de renforcer la prise de décision stratégique pour l’accomplissement d’une carrière.
                                </p>
                            </div>
                            <div class="d-flex justify-content-start bounce" style="align-items: center;">
                                <a id="documentation-link" class="btn bounce text-uppercase" style="font-weight: bold;" href="#"> <i class="fas fa-2x fa-book"></i></a>
                                <a id='arrow-down' href="{{route('orientation')}}" class="text-orientation ml-5 bounce text-white">Orientation - En click</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <p class="text-center text-uppercase text-white text-option">Optez pour </p>
                        </div>
                        <div class="flex-row d-flex justify-content-between">
                            <div class="card">
                                <div class="card-side front">
                                    <div>
                                        <p><span>Un</span> metier</p>
                                    </div>
                                </div>
                                <div class="card-side back">
                                    <div>
                                        <p><span>Un</span> parcours</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-1">
                                <div class="card-side front">
                                    <div>
                                        <p><span>Une</span> formation</p>
                                    </div>
                                </div>
                                <div class="card-side back">
                                    <div>
                                        <p><span>Un</span> parcours</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-1">
                                <div class="card-side front">
                                    <div>
                                        <p><span>Une</span> Ecole</p>
                                    </div>
                                </div>
                                <div class="card-side back">
                                    <div>
                                        <p><span>Un</span> centre</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="platform-highlights" class="bg-light">
            <div class="container-fluid px-0" style="margin-top: -60px;    background: transparent; position: relative;">
                <!--<div class="row">
                        <div class="d-flex justify-content-center mb-5">
                            <h1 class="col-8 text-capitalize text-center" style="font-family: 'Gelasio', serif;">Un guide pour un meilleur avenir.</h1>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h3 class="col-8 text-capitalize text-center" data-aos="zoom-out-down" style="font-weight: 400;">Une plateforme qui vous accompagne en fonction des besoins d’avenir pour une meilleure insertion professionnelle </strong>.</h3>
                    </div>-->
                <ul>
                    <li class="item card-cover h-100 overflow-hidden rounded-5" data-aos="zoom-out-right">
                        <div data-aos="zoom-out-right"><a href="#">
                                <h4 class="card-header text-capitalize">Découvrez vos atouts </h4>
                            </a>
                            <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fuga porro vitae distinctio, repellendus dolores sed. </p>
                        </div>
                        <div class="decor-card"></div>
                    </li>
                    <li class="item card-cover h-100 overflow-hidden rounded-5">
                        <a href="#">
                            <h4 class="card-header text-capitalize">Evaluez les opportunités</h4>
                        </a>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia officiis, neque laborum id impedit incidunt quia corporis ducimus magnam. </p>
                        <div class="decor-card"></div>
                    </li>
                    <li class="item card-cover h-100 overflow-hidden rounded-5">
                        <a href="#">
                            <h4 class="card-header text-capitalize">Choisissez un parcours</h4>
                        </a>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia officiis, neque laborum id impedit incidunt quia corporis ducimus magnam. </p>
                        <div class="decor-card"></div>
                    </li>
                    <li class="item  card-cover h-100 overflow-hidden rounded-5">
                        <a href="#">
                            <h4 class="card-header text-capitalize">Découvrir un métier</h4>
                        </a>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia officiis, neque laborum id impedit incidunt quia corporis ducimus magnam. </p>
                        <div class="decor-card"></div>
                    </li>
                    <li class="item card-cover h-100 overflow-hidden  rounded-5 ">
                        <a href="#">
                            <h4 class="card-header text-capitalize"><i class="ti-comments"></i>Faite vous guider</h4>
                        </a>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia officiis, neque laborum id impedit incidunt quia corporis ducimus magnam. </p>
                        <div class="decor-card"></div>
                    </li>
                    <li class="item card-cover h-100 overflow-hidden  rounded-5 ">
                        <a href="#">
                            <h4 class="card-header text-capitalize"><i class="ti-comments"></i>Faite vous guider</h4>
                        </a>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia officiis, neque laborum id impedit incidunt quia corporis ducimus magnam. </p>
                        <div class="decor-card"></div>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    @include('partials.footer')
</body>

</html>
