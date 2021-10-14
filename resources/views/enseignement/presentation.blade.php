<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Orientation | Enseignement</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Gelasio&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/view.css') }}" rel="stylesheet">
    <link href="{{ asset('css/orientation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <link href="{{ asset('css/search.css') }}" rel="stylesheet">

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">

    <style>
        .btn-check:focus+.btn,
        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 0.1rem rgb(56 193 114 / 6%);
        }
    </style>
</head>

<body>
    <div id="app">
        <header class="bg-cover">
            <livewire:top-navbar-orientation />

            <div class="container" id="description">
                <div id="myCarousel" class="carousel  slide" data-bs-interval="90000" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div id="orientations-types">
                                <div id="orientations-types__cards" class="container">
                                    <div class="row d-flex py-3 mb-2 px-0 justify-content-center">
                                        <div class="col-8">
                                            <h2 class="text-orientation text-center">Choisissez <span style="font-weight: bold;">une catégorie d’enseignement ...</span></h2>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center px-3">
                                        @forelse($type_enseignements as $type)
                                        <a href="{{ route('enseignement.view', ['code' => $type->code ])}}" class="card-cover item card shadow-sm col-4 mr-3 card-enseignement" style="margin-right: 20px;margin-left:20px;" data-aos="flip-left">
                                            @if($type->id % 2 != 0)
                                            <div class="row p-2 card-image description-header-type" style="background-color: #dfdfdf;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center ">
                                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type" style="font-size: 15px;text-align:center;">{{$type->libelle}}</h4>
                                            </div>
                                            @else
                                            <div class="row p-2 card-image description-header-type" style="background-color: #243a5e;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center">
                                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type text-white" style="font-size: 15px;text-align:center;">{{$type->libelle}}</h4>
                                            </div>
                                            @endif
                                            <p class="card-body card-text text-decoration-none description-type">{{$type->description}}</p>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn text-dark col-5 p-2 btn-sm rounded-5 text-uppercase btn-discover mb-4">
                                                    Decouvrir
                                                </button>
                                            </div>
                                        </a>
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
                                        <div class="col-8">
                                            <h2 class="text-orientation text-center">Choisissez <span class="" style="font-weight: bold;"> catégorie de formation ...</span></h2>
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center px-3">
                                        @forelse($type_formations as $type_formation)
                                        <a href="{{ route('formation.show', ['code' => $type_formation->code])}}" class="card-cover item card shadow-sm col-4 card-enseignement" data-aos="flip-left">
                                            @if($type_formation->id % 2 == 0)
                                            <div class="row p-2 card-image description-header-type" style="background-color: #dfdfdf;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center ">
                                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type_formation->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type" style="font-size: 15px;text-align:center;">{{$type_formation->libelle}}</h4>
                                            </div>
                                            @else
                                            <div class="row p-2 card-image description-header-type" style="background-color: #243a5e;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center">
                                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type_formation->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type text-white" style="font-size: 15px;text-align:center;">{{$type_formation->libelle}}</h4>
                                            </div>
                                            @endif
                                            <p class="card-body card-text text-decoration-none description-type">{{$type_formation->description}}</p>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn text-dark col-5 p-2 btn-sm rounded-5 text-uppercase btn-discover mb-5">
                                                    Decouvrir
                                                </button>
                                            </div>
                                        </a>
                                        @empty
                                        <div class="alert alert-warning">
                                            <span>Aucune donnee !!!</span>
                                        </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </header>

        <section id="actualites-onglet">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-9" id="item-actualite">
                            <div class="col-10" style="margin-left: 50px;" id="description">
                                <h2 class="my-2 py-4  d-flex justify-content-start" style="align-items: center;    font-family: 'Gelasio', serif;">
                                    <span class="text-uppercase m-2 text-actualite">Actualite</span>
                                </h2>
                                <p class="text-description-actualite col-md-12 py-2" style="color: #243a5e;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum vero culpa, debitis ducimus atque aliquid beatae modi aut distinctio. Pariatur fugit expedita sit ipsum, quos praesentium maxime accusamus eius repudiandae!</p>
                                <a class="lire-actualite" href="#">Lire l'actualite </a>
                                <hr style="color: #38c172;">
                                <time datetime="2021-06-01 00:00:00 +0000 UTC"><i class="ti-alarm-clock"></i>01 June 2021</time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-actualites">
                <div class="service-bg"></div>
                <div class="row" style="justify-content: center;">
                    <h2 class="title-header-actualite">Actualites enseignements</h2>
                    <hr class="divider">
                </div>
            </div>

            <livewire:searchbar-news />

            <button class="carousel-control-next" type="button" data-bs-target="#carouselParcours" style="padding-left: 11%;" data-bs-slide="next">
                <span class="fa fa-chevron-right fa-2x text-dark"></span>
            </button>
        </section>

    </div>
    @include('partials.footer')
</body>

</html>
