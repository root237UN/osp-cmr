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
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <style>

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
            font-size: 35px;
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
                                <h1 style="text-transform: capitalize;">La meilleure plateforme d’aide à l’orientation </h1>
                                <p style="text-align: justify;" class="p body">
                                Une plateforme conçue pour pallier le déficit de conseillers d’orientation au sein de nos institutions scolaires et professionnelles afin de renforcer la prise de décision stratégique pour l’accomplissement d’une carrière.
                            </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a id="documentation-link" class="btn btn-success text-light text-uppercase" style="font-weight: bold;" href="#">Orientation <i class="ti-book"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-center" style="z-index: 10;margin-top: -50px;">
                        <a id="arrow-down" href="#">
                            <i data-feather="arrow-down" class="text-light"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="py-4">

            <style>
                section {
                    padding: 100px 0;
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
                }

                ul {
                    list-style-type: none;
                    padding-left: 0;
                    margin: 0;
                }

                #platform-highlights li {
                    width: 370px;
                    line-height: 1.8;
                    padding: 20px 20px 0;
                    text-align: justify;
                    transition: all ease-in-out 350ms 100ms;
                }

                #platform-highlights li:hover {
                    transform: translateY(20px)scaleY(.95);
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

                /** Decoration pour les cards */

                .decor-card {
                    border: 20px solid transparent;
                    height: 100%;
                    width: 100%;
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    right: 0;
                    transition: all ease-in-out 350ms;
                }

                .card-cover:hover .decor-card {
                    border: 20px solid #38c17205;
                }
                .card-header{
                    font-family: 'Gelasio', serif;
                }
            </style>

            <section id="platform-highlights" class="bg-light">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center mb-5">
                            <h1 class="col-8 text-capitalize text-center" style="font-family: 'Gelasio', serif;">Un guide pour un meilleur avenir.</h1>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h3 class="col-8 text-capitalize text-center" data-aos="zoom-out-down" style="font-weight: 400;">Une plateforme qui vous accompagne en fonction des besoins d’avenir pour une meilleure insertion professionnelle </strong>.</h3>
                    </div>
                    <ul>
                        <li class="item card-cover h-100 overflow-hidden rounded-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <a href="#">
                                <h4 class="card-header text-capitalize">Découvrez vos atouts </h4>
                            </a>
                            <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fuga porro vitae distinctio, repellendus dolores sed. Repudiandae eum perferendis corrupti maxime consequuntur vitae qui, dicta nam, explicabo voluptate, recusandae exercitationem. </p>
                            <div class="decor-card"></div>
                        </li>
                        <li class="item card-cover h-100 overflow-hidden rounded-5">
                            <a href="#">
                                <h4 class="card-header text-capitalize">Evaluez les opportunités</h4>
                            </a>
                            <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia officiis, neque laborum id impedit incidunt quia corporis ducimus magnam. Adipisci enim a totam, ratione at aperiam libero doloremque dignissimos!</p>
                            <div class="decor-card"></div>
                        </li>
                        <li class="item card-cover h-100 overflow-hidden rounded-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <a href="#">
                                <h4 class="card-header text-capitalize">Choisissez un parcours</h4>
                            </a>
                            <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia officiis, neque laborum id impedit incidunt quia corporis ducimus magnam. Adipisci enim a totam, ratione at aperiam libero doloremque dignissimos!</p>
                            <div class="decor-card"></div>
                        </li>
                        <li class="item  card-cover h-100 overflow-hidden rounded-5" data-aos="zoom-out-right">
                            <a href="#">
                                <h4 class="card-header text-capitalize">Découvrir un métier</h4>
                            </a>
                            <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia officiis, neque laborum id impedit incidunt quia corporis ducimus magnam. Adipisci enim a totam, ratione at aperiam libero doloremque dignissimos!</p>
                            <div class="decor-card"></div>
                        </li>
                        <li class="item card-cover h-100 overflow-hidden  rounded-5 " data-aos="zoom-out-right">
                            <a href="#">
                                <h4 class="card-header text-capitalize"><i class="ti-comments"></i>Faite vous guider</h4>
                            </a>
                            <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia officiis, neque laborum id impedit incidunt quia corporis ducimus magnam. Adipisci enim a totam, ratione at aperiam libero doloremque dignissimos!</p>
                            <div class="decor-card"></div>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </div>

    @include('partials.footer')
</body>

</html>
