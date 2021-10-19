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
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

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

            <div class="container-fluid pb-1" id="description">
                <div class="row">
                    <div class="col-6 " data-aos="zoom-in-down">
                        <div class="flex-column d-flex justify-content-between" id="banner-text">
                            <h1 class="mb-0 mt-4" style="text-transform: capitalize;">Enseignement secondaire au cameroun </h1>
                            <p style="text-align: justify;" class="p my-5 body">
                                Une plateforme conçue pour pallier le déficit de conseillers d’orientation au sein de nos institutions scolaires et professionnelles afin de renforcer la prise de décision stratégique pour l’accomplissement d’une carrière.
                            </p>
                            <div class="d-flex justify-content-start bounce" style="align-items: center;">
                                <a id="documentation-link" class="btn bounce text-uppercase" style="font-weight: bold;" href="#"> <i class="fas fa-2x fa-book"></i></a>
                                <a id='arrow-down' href="#" class="text-orientation ml-5 bounce text-white">Orientation - En clique</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div id="orientations-types">
                            <div id="orientations-types__cards">
                                <div class="row d-flex pb-3 px-0 justify-content-center">
                                    <div class="col-12">
                                        <h2 class="text-orientation text-center">Optez pour <span style="font-weight: 200;">une catégorie d’enseignement ...</span></h2>
                                    </div>
                                </div>
                                <div class="flex-row d-flex justify-content-center">
                                    @forelse($type_enseignements as $type)
                                    <div class="card-cover item card shadow-sm  card-enseignement" style="margin-right: 20px;margin-left:20px;" data-aos="flip-left">

                                        <a href="{{ route('enseignement.view', ['code' => $type->code ])}}">
                                            @if($type->id % 2 != 0)
                                            <div class="flex-row p-2 d-flex justify-content-between card-image description-header-type" style="background-color: #515151;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center ">
                                                    <div style="height: 60px; width: 60px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type text-white" style="font-size: 15px;text-align:center;">{{$type->libelle}}</h4>
                                            </div>
                                            @else
                                            <div class="flex-row p-2 d-flex justify-content-between card-image description-header-type" style="background-color: #515151;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center">
                                                    <div style="height: 60px; width: 60px; background-color: #fff;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type text-white" style="font-size: 15px;text-align:center;">{{$type->libelle}}</h4>
                                            </div>
                                            @endif
                                            <p class="card-body mb-0 card-text text-decoration-none description-type">{{$type->description}}</p>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn text-dark col-5 p-2 btn-sm rounded-5 text-uppercase text-white btn-discover mb-4">
                                                    Decouvrir
                                                </button>
                                            </div>
                                        </a>
                                    </div>
                                    @empty
                                    <div class="alert alert-warning">
                                        <span>Aucune donnée !!!</span>
                                    </div>
                                    @endforelse
                                </div>

                                <div class="break"></div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--<section id="actualites-onglet">
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
        </section>-->

    </div>
    @include('partials.footer')
</body>

</html>
