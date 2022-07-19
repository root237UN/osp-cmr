<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Orientation | OSP - Enseignement</title>

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
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/orientation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <link href="{{ asset('css/search.css') }}" rel="stylesheet">

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive-mobile.css') }}" rel="stylesheet">

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
            @include('partials.navbar-home')

            <div class="container-fluid pb-1" id="description">
                <div class="row">
                    <div class="col-12 col-md-6" data-aos="zoom-in-down">
                        <div class="flex-column d-flex justify-content-between" id="banner-text">
                            <div class="title-1"><h1 class="mb-0 mt-4">{{$content->libelle}}</h1></div>
                            <div class="site-text text-white mt-4 mb-4" style="text-align: justify;line-height:30px;font-size:16px;" class="p my-5 body">
                                {{$content->description}}
                            </div>

                            <div class="d-flex justify-content-start " style="align-items: center;">
                                <a id="documentation-link" class="btn  text-uppercase"  href="#"> <i class="fas fa-2x fa-book"></i></a>
                                <a  href="{{route('orientation')}}" class="text-orientation ml-5 ">Orientez-vous ici </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-6 hidden-mobile">
                        <div id="orientations-types">
                            <div id="orientations-types__cards">
                                <div class="row d-flex pb-3 px-0 justify-content-center">
                                    <div class="col-12">
                                        <h2 class="text-orientation title-1-1 text-center">Optez pour <span style="font-weight: 200;">un enseignement </span></h2>
                                    </div>
                                </div>
                                <div class="flex-row row d-flex justify-content-center">
                                    @forelse($type_enseignements as $type)
                                    <div class="card-cover col-12 item card shadow-sm  card-enseignement" style="margin-right: 20px;margin-left:20px;" data-aos="flip-left">

                                        <a href="{{ route('enseignement.view', ['code' => $type->libelle_1 ])}}">
                                            @if($type->id % 2 != 0)
                                            <div class="flex-row p-2 d-flex justify-content-between card-image description-header-type" style="background-color: #515151;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center ">
                                                    <div style="height: 60px; width: 60px;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <div class="title-2">
                                                    <h4 class="col-8 justify-content-center title-type text-white" style="font-size: 14px;">{{$type->libelle}}</h4>
                                                </div>
                                            </div>
                                            @else
                                            <div class="flex-row p-2 d-flex justify-content-between card-image description-header-type" style="background-color: #515151;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center">
                                                    <div style="height: 60px; width: 60px;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-8 justify-content-center title-type text-white" style="font-size: 15px;text-align:center;">{{$type->libelle}}</h4>
                                            </div>
                                            @endif
                                            <div class="card-body mb-0 site-text card-text text-decoration-none description-type">
                                                {{$type->description}}
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn text-dark col-5 p-2 btn-sm rounded-5 site-text-1 text-white btn-discover mb-4">
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


                    <div class="mt-5 hidden-web">
                        <div id="orientations-types">
                            <div id="orientations-types__cards">
                                <div class="row d-flex pb-3 px-0 justify-content-center">
                                    <div class="col-12">
                                        <h2 class="text-orientation title-1-1">Optez pour <span style="font-weight: 200;">un enseignement </span></h2>
                                    </div>
                                </div>
                                <div class="">
                                    @forelse($type_enseignements as $type)
                                    <div class="card-cover col-12 mb-4 item card shadow-sm  card-enseignement" data-aos="flip-left">

                                        <a href="{{ route('enseignement.view', ['code' => $type->libelle_1 ])}}">
                                            @if($type->id % 2 != 0)
                                            <div class="flex-row p-2 d-flex justify-content-between card-image description-header-type" style="background-color: #515151;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center ">
                                                    <div style="height: 60px; width: 60px;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <div class="title-2">
                                                    <h4 class="col-12 justify-content-center title-type text-white">{{$type->libelle}}</h4>
                                                </div>
                                            </div>
                                            @else
                                            <div class="flex-row p-2 d-flex justify-content-between card-image description-header-type" style="background-color: #515151;align-items:center;">
                                                <div class="col-4 d-flex justify-content-center">
                                                    <div style="height: 60px; width: 60px;border-radius:50px;">
                                                        <img src="{{$type->image}}" style="height: 100%;width: 100%;border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <h4 class="col-12 justify-content-center title-type text-white">{{$type->libelle}}</h4>
                                            </div>
                                            @endif
                                            <div class="card-body mb-0 site-text card-text text-decoration-none description-type">
                                                {{$type->description}}
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn text-dark col-5 p-2 btn-sm rounded-5 site-text-1 text-white btn-discover mb-4">
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
    </div>
    @include('partials.footer')
</body>

</html>
