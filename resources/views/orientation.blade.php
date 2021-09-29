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
    <link href="{{ asset('css/view.css') }}" rel="stylesheet">
    <link href="{{ asset('css/orientation.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="bg-cover">
            <livewire:top-navbar-orientation />

            <div class="container" id="description">
                <div id="myCarousel" class="carousel slide" data-interval="300000" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div id="orientations-types">
                                <div id="orientations-types__cards" class="container">
                                    <div class="row d-flex py-3 mb-2 px-0 justify-content-center">
                                        <div class="col-6">
                                            <h2 class="text-orientation text-center">Choisissez <span id="typed3" class="" style="font-weight: bold;">un enseignement ...</span></h2>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center px-3">
                                        @forelse($type_enseignements as $type)
                                        <div class="card-cover item card shadow-sm col-4 card-enseignement" style="background-color:#f8fafc" data-aos="flip-left">
                                            @if($type->id % 2 != 0)
                                            <div class="row p-2 card-image description-header-type" style="background-color: #dfdfdf;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center ">
                                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type">{{$type->libelle}}</h4>
                                            </div>
                                            @else
                                            <div class="row p-2 card-image description-header-type" style="background-color: #243a5e;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center">
                                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type text-white">{{$type->libelle}}</h4>
                                            </div>
                                            @endif
                                            <p class="card-body card-text text-decoration-none description-type">{{$type->description}}</p>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('orientation.show', ['code' => $type->code ])}}" class="btn text-dark col-5 p-2 btn-sm rounded-5 text-uppercase btn-discover mb-5">
                                                    Decouvrir
                                                </a>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="alert alert-warning">
                                            <span>Aucune donnee !!!</span>
                                        </div>
                                        @endforelse
                                    </div>

                                    <div class="break"></div>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div id="orientations-types">
                                <div id="orientations-types__cards" class="container">
                                    <div class="row d-flex py-3 mb-2 px-0 justify-content-center">
                                        <div class="col-6">
                                            <h2 class="text-orientation text-center">Choisissez <span id="typed3" class="" style="font-weight: bold;">une formation ...</span></h2>
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center px-3">
                                        @forelse($type_formations as $type_formation)
                                        <div class="card-cover item card shadow-sm col-4 card-enseignement" style="background-color:#f8fafc" data-aos="flip-left">
                                            @if($type_formation->id % 2 == 0)
                                            <div class="row p-2 card-image description-header-type" style="background-color: #dfdfdf;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center ">
                                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type_formation->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type">{{$type_formation->libelle}}</h4>
                                            </div>
                                            @else
                                            <div class="row p-2 card-image description-header-type" style="background-color: #243a5e;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center">
                                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type_formation->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type text-white">{{$type_formation->libelle}}</h4>
                                            </div>
                                            @endif
                                            <p class="card-body card-text text-decoration-none description-type">{{$type_formation->description}}</p>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('formation.show', ['code' => $type_formation->code])}}" class="btn text-dark col-5 p-2 btn-sm rounded-5 text-uppercase btn-discover mb-5">
                                                    Decouvrir
                                                </a>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="alert alert-warning">
                                            <span>Aucune donnee !!!</span>
                                        </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                            </svg>

                            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div>-->
                        </div>
                    </div>

                    <!--<div class="row">
                    <div class="col-6 d-flex justify-content-center" data-aos="zoom-in-down">
                        <div class="description-logo mt-5">
                            <img src="images/bg3.jpg" style="height: 100%;width: 100%;border-radius:50%;border:none">
                        </div>
                    </div>
                    <div class="col-6" data-aos="zoom-in-down">
                        <div id="banner-text">
                            <div>
                                <h1 style="text-transform: capitalize;">La meilleure plateforme<br>d'aide a l'orientation</h1>
                                <p style="text-align: justify;" class="p body">Une plateforme concue pour palier au deficite de conseillers d'orientation au sein de nos institutions scolaire et professionnelle enfin de renforcer la prise de decision strategique pour l'accomplissement d'une carriere. </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a id="documentation-link" class="btn btn-success text-light text-uppercase" style="font-weight: bold;" href="{{route('orientation')}}">Orientation <i class="ti-book"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-center" style="z-index: 10;margin-top: -50px;">
                        <a id="arrow-down" href="#">
                            <i data-feather="arrow-down" class="text-light"></i>
                        </a>
                    </div>
                </div>-->
                </div>
        </header>

        <section id="orientations">
            <div class="service-bg"></div>
            <div class="row" style="justify-content: center;">
                <h2 class="title-orientations">Actualites Orientation</h2>
                <hr class="divider">
            </div>
        </section>
    </div>
    @include('partials.footer')
</body>

</html>
