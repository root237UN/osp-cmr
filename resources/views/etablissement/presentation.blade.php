<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Orientation | Etablissements</title>

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
    <style>
        .container-header {
            max-width: 1600px;
            width: 100%;
            padding-left: 5%;
            padding-right: 5%;
            margin-left: auto;
            margin-right: auto;
        }

        .logo-welcome {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 25px;
            color: #fff;
        }

        header.bg-cover {
            --nav-text-shadow: 0 0 20px rgba(0, 0, 0, .5);
        }

        header {
            background-image: url(images/bg3.jpg);
            box-shadow: 0 0 20px rgba(0, 0, 0, .5), inset 0 -8px rgba(0, 0, 0, .3);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 15px rgba(0, 0, 0, .1);
            background-color: var(--white-color);
            background-size: cover;
            background-position: 50%;
            background-repeat: no-repeat;
            position: relative;
            font-family: var(--font-family), sans-serif;
        }

        header.bg-cover::before {
            background: linear-gradient(45deg, black, #fcfdfd);
        }

        header::before {
            filter: brightness(.4);
        }

        header::before {
            position: absolute;
            content: '';
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: .8;
        }

        header.bg-cover #navbarSupportedContent li>a {
            color: #fff;
            text-shadow: 0 0 1px #fff, var(--nav-text-shadow);
            padding: 10px 13px;
            display: inline-block;
            height: 43px;
            border: 1px solid transparent;
            text-transform: uppercase;
            cursor: pointer;
            font-size: 13px;
        }

        #description {
            display: flex;
            justify-content: center;
            margin: auto;
            z-index: 10;
            align-content: center;
            align-items: center;
        }

        .description-logo {
            border: 1px solid transparent;
            height: 400px;
            width: 400px;
            background-color: darkgrey;
            border-radius: 400px;
            /*background: url(images/description-logo.jpg)repeat;
            background-position: auto ;
            background-size: auto;*/
        }

        #banner-text {
            padding: 80px 0;
            margin: 0 50px;
            text-shadow: 0 0 20px #000;
        }

        #banner-text h1 {
            color: #fff;
            font-weight: 400;
            line-height: 1.4;
            text-shadow: 0 2px 20px rgba(0, 0, 0, .2);
            margin-bottom: 23px;
            font-size: 30px;
        }

        #banner-text p {
            color: #fff;
            line-height: 1.8;
            font-size: 17.4px;
            opacity: 1;
        }

        #banner-text h1 {
            color: #fff;
            font-size: 30px;
            font-weight: 400;
            line-height: 1.4;
            text-shadow: 0 2px 20px rgba(0, 0, 0, .2);
            margin-bottom: 23px;
        }

        #banner-text #documentation-link {
            margin-left: .75em;
            text-shadow: 0 2px 5px rgba(0, 0, 0, .25);
            box-shadow: inset 0 -0.43em rgba(0, 0, 0, .2), 0 2px 20px transparent;
        }

        #banner-text .btn:hover {
            transform: translateY(2px)scaleY(.95);
        }

        #banner-text .btn {
            width: 180px;
            white-space: nowrap;
            padding: 1.29em .71em;
            transition: box-shadow .4s, transform .2s, background .4s, color .4s ease-in-out;
            border-radius: .43em;
        }

        #banner-text #documentation-link:hover {
            /*box-shadow: inset 0 -3px rgba(0, 0, 0, .2), 0 0 10px #fff;*/
            box-shadow: rgba(255, 255, 255, 0.16) 0px 1px 4px;
        }

        @keyframes bounce {
            0% {
                transform: translateY(-10px)scaleY(.8);
            }

            100% {
                transform: translateY(10px)scaleY(1);
            }
        }

        #arrow-down {
            animation: bounce 1s cubic-bezier(.5, .05, 1, .5)infinite alternate;
            transform-origin: right bottom;
        }

        .btn-connect {
            height: 35px;
            color: #fff;
        }

        #platform-highlights {
            background-image: url(images/bg-section.png);
            background-position: absolute;
        }

        #platform-highlights ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1110px;
            margin: auto;
            padding-bottom: 50px;
            padding-top: 40px;
            background-color: #243a5e;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
            margin: 0;
        }

        #platform-highlights li {
            width: 370px;
            line-height: 1.8;
            padding: 10px 20px 10px;
            text-align: justify;
            transition: all ease-in-out 350ms 100ms;
            background-color: #f6f6f6;
            align-items: center;
            display: flex;
        }

        #platform-highlights li:hover {
            transform: translateY(1px)scaleY(.95);
            box-shadow: 0 1rem 2.5rem rgba(0, 0, 0, 0.075) !important;
        }

        #plateform-highlights a>h4 {
            color: var(--text-color-dark);
        }

        section h2,
        section h3,
        section h4 {
            font-weight: 400;
        }

        ul li {
            padding-left: 20px;
            position: relative;
        }

        a,
        button,
        select {
            cursor: pointer;
        }

        a,
        a:hover,
        a:focus {
            text-decoration: none;
            color: var(--primary-color);
        }

        #map {
            margin-top: -80px
        }

        #map svg {
            cursor: pointer;
        }

        .map path {
            transition: all ease-in-out 350ms;
        }

        .map path:hover {
            fill: #243a5e !important;
        }

        .map path.is-active {
            fill: #243a5e !important;
        }

        .map-list li {
            cursor: pointer;
        }

        #map li span.is-active {
            font-weight: bold;
            color: #deb857;
        }
    </style>
</head>

<body>
    <div id="app">
        <header class="bg-cover">
            <livewire:top-navbar-orientation />

            <div class="container" id="description">
                <div class="row">
                    <div class="col-6 d-flex justify-content-center" data-aos="zoom-in-down">
                        <div class="description-logo mt-5">
                            <img src="images/bg3.jpg" style="height: 100%;width: 100%;border-radius:50%;border:none">
                        </div>
                    </div>
                    <div class="col-6" data-aos="zoom-in-down">
                        <div id="banner-text">
                            <div>
                                <h1 style="text-transform: capitalize;">Une plateforme d'orientation et d'accompagnement</h1>
                                <p style="text-align: left;" class="p body">Decouvrer et consulter les etablissements d'enseignement secondaire prets de votre localite. Acceder en un clic a un vaste catalogue d'etablissements. </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a id="documentation-link" class="btn btn-success text-light text-uppercase" style="font-weight: bold;" href="{{route('orientation')}}">Decouvrir les etablissements <i class="ti-book"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-center" style="z-index: 10;margin-top: -50px;">
                        <a id="arrow-down" href="#map">
                            <i data-feather="arrow-down" class="text-light"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>


        <div id="platform-highlights" class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <h2 class="col-8 text-capitalize py-3 text-center" style="font-weight: 700;">Cartographie des etablissements d'enseignements secondaire</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="row d-flex justify-content-center" id="map">
                        @include('partials.carte')
                        <div class="col-5 map-list" style="margin-top: 145px">
                            <ul>
                                <li class="d-flex justify-content-between">
                                    <span id="link_sud">
                                        <i class="fas mx-2 fa-check"></i>Region du Sud
                                    </span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span id="link_nord"><i class="fas mx-2 fa-check"></i>Region du Nord </span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span id="link_littoral"><i class="fas mx-2 fa-check"></i>Region du Littoral</span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span id="link_centre"><i class="fas mx-2 fa-check"></i>Region du Centre</span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span id="link_est"><i class="fas mx-2 fa-check"></i>Region du Est</span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span id="link_ouest"><i class="fas mx-2 fa-check"></i>Region du Ouest </span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span id="link_nord_ouest"><i class="fas mx-2 fa-check"></i>Region du Nord-Ouest </span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span id="link_sud_ouest"><i class="fas mx-2 fa-check"></i>Region du Sud-Ouest </span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span id="link_adamaoua"><i class="fas mx-2 fa-check"></i>Region de l'adamaoua </span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span id="link_extreme_nord"><i class="fas mx-2 fa-check"></i>Region du Extreme-Nord</span>
                                    <span class="badge mx-2 bg-secondary">4</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <h1>Etablissements</h1>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <livewire:datatable-ecole />
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    @include('partials.footer')
    <script>
        $(function() {
            $('[id*=region_').on('click', function() {
                //On recupere l'ID de la region
                let region = $(this);
                let regionId = $(this)["0"].id;

                let regions = $('[id*=region_');
                let txt = regionId.replace('region_', '');
                let nom = txt.replace('_', ' ');

                regions.css('fill', '#fcfcfd');
                region.css('fill', '#deb857');

            });


            let regions = $('[id*=region_');
            let links = $('[id*=link_');
            let map = document.getElementById('map');

            let activeArea = function(id) {
                for (let index = 0; index < links.length; index++) {
                    const link = links[index];
                    const region = regions[index];
                    link.classList.remove('is-active');
                    region.classList.remove('is-active');
                }
                if (id !== undefined) {
                    document.querySelector('#link_' + id).classList.add('is-active');
                    document.querySelector('#region_' + id).classList.add('is-active');
                }
            };

            for (let index = 0; index < regions.length; index++) {
                const element = regions[index];
                element.addEventListener('mouseenter', function(e) {
                    let id = this.id.replace('region_', '');
                    activeArea(id);
                })
            }

            for (let index = 0; index < links.length; index++) {
                const element = links[index];
                element.addEventListener('mouseenter', function(e) {
                    let id = this.id.replace('link_', '');
                    activeArea(id);
                })
            }

            map.addEventListener('mouseover', function() {
                activeArea();
            })

        });
    </script>
</body>

</html>
