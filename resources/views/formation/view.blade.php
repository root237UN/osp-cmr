@extends('layouts.app')

@section('content')

<style>
    section.bg-cover {
        /*--nav-text-shadow: 0 0 20px rgba(0, 0, 0, .5);*/
    }

    section.bg-cover {
        background-image: url(../images/bg2.jpg);
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat;
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
        background-color: #fff;
        min-height: 60vh;
        display: flex;
        flex-direction: column;
        position: relative;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    section.bg-cover::before {
        background: linear-gradient(45deg, #243a5e, #243a5e);
    }

    section.bg-cover::before {
        position: absolute;
        content: '';
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0.8;
    }

    section.bg-cover h2 {
        color: #38c172;
        text-shadow: 0 2px 5px rgba(0, 0, 0, .2);
    }

    p.text-description {
        color: #ffffff;
        font-weight: 200;
        font-style: italic;
        font-size: 17.4px;
        text-align: left;
        opacity: .8;
        line-height: 2rem;
    }

    section.bg-cover img {
        border: 1px solid transparent;
        height: 250px;
        width: 250px;
        background-color: whitesmoke;
        border-radius: 400px;
        opacity: .8;
    }

    #description {
        z-index: 10;
    }

    #content-option {
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
        background-color: #f8fafc;
        min-height: 100vh;
        background-image: url(../images/bg-section.png);
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat;
    }

    .title-option {
        color: #000;
        font-weight: 200;
        font-style: italic;
        text-align: left;
        opacity: .8;
        line-height: 2rem;
        padding-left: 0px;
        max-height: 100px;
        font-family: 'Gelasio', serif;
    }


    .card-option {
        transition: all ease-in-out 300ms;
        border: none;
        min-height: 250px;
        width: 300px;
        margin: 10px;
        text-align: center;
        background-color: #fff;
        background: linear-gradient(45deg, #00000096, #38c17252);
        /*background: linear-gradient(45deg, #56ca87, #56ca87);
        background: linear-gradient(45deg, #242738, #38c172);*/
    }

    .card-option:hover {

        box-shadow: 0 5px 20px rgba(0, 0, 0, .15), 0 4px 4px -2px rgba(0, 0, 0, .1) !important;
        opacity: 1;
        background: linear-gradient(45deg, #38c17252, #00000096);
        transform: translateY(-5px)scale(1);
    }

    .option-text {
        color: #fff;
        font-size: 15px;
    }

    .option-text::after {
        position: absolute;
        bottom: -20px;
        left: 50%;
        content: '\e623 Decouvrir';
        transform: translateX(-50%);
    }

    .option-text::after,
    .small-text-banner {
        display: inline-block;
        background: #fcfcfc;
        box-shadow: 0 1px 5px #38c172, inset 0 1px rgba(255, 255, 255, .2);
        border-radius: 999px;
        padding: 5px 20px;
        font-size: 14px;
        color: #00000096 !important;
        font-family: themify, Georgia, 'Times New Roman', Times, serif, sans-serif;
        border: 1px solid rgba(0, 0, 0, .2);
        transition: transform .2s;
        white-space: nowrap;
    }

    .img-option {
        min-width: 50px;
        min-height: 50px;
        border-radius: 50px;
    }

    a.card-option {
        text-decoration: none;
        cursor: pointer;
    }

    a.card-option h3 {
        text-transform: capitalize;
        font-weight: bold;
        font-style: italic;
        color: #fff;
        font-size: 15px;
        line-height: 1.5rem;
    }


    a.link-parcours {
        color: #38c172;
        font-size: 26px;
        text-transform: capitalize;
        text-decoration: none;
        font-style: italic;
        cursor: pointer;
    }

    .decouvrir-parcours::after,
    .link-parcours::after {
        content: "›";
        display: inline-block;
        margin-left: 0.2em;
        will-change: transform;
        transition: transform 0.15s linear 0s;
    }

</style>

<section class="bg-cover">
    <div class="container">
        <div class="row py-4">
            <div class="col-4 d-flex justify-content-center" style="align-items: center;" data-aos="zoom-in-down">
                <img class="img img-thumbnail m-2" src="../images/bg3.jpg" style="border-radius:50%;border:none" />
            </div>
            <div class="col-8" id="description">
                <h2 class="my-2 py-4  d-flex justify-content-start" style="align-items: center;">
                    <span class="text-uppercase title-type">Formation</span>
                </h2>
                <p class="text-description col-md-12"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet luctus venenatis lectus magna fringilla urna. Dictum sit amet justo donec enim. Dignissim diam quis enim lobortis scelerisque fermentum dui faucibus. Ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo. Feugiat sed lectus vestibulum mattis ullamcorper velit. Amet venenatis urna cursus eget. Sodales ut eu sem integer vitae. Duis ut diam quam nulla porttitor massa id neque aliquam. </p>
                <div class="line-infos d-flex justify-content-between">
                    <a class="link-parcours" href="#">Des questions !</a>
                    <a class="link-ensavoir" href="#">En savoir plus!</a>
                </div>
                <hr>
                <p style="font-style: italic;font-family: 'Gelasio', serif;color: #fff;">Des questions. Posez les ici !!!</p>
            </div>
            <div class="col-8 d-flex justify-content-end" style="z-index: 10;">
                <a id="arrow-down" href="#options">
                    <i data-feather="arrow-down" class="text-light"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="content-option">
    <div class="container">
        <div class="d-flex justify-content-center py-5">
            <h1 class="title-option">Choisissez <span class="" style="font-weight: bold;">une formation ...</span></h1>
        </div>

        <div class="row d-flex justify-content-center" id='options'>
        </div>
    </div>
</section>


<section id="actualites-onglet">

    <div id="carouselParcours" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-9" id="item-actualite">
                        <div class="col-10" style="margin-left: 50px;" id="description">
                            <h2 class="my-2 py-4  d-flex justify-content-start" style="align-items: center;    font-family: 'Gelasio', serif;">
                                <span class="text-uppercase m-2 text-actualite">Actualite</span>
                            </h2>
                            <p class="text-description-actualite col-md-12 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum vero culpa, debitis ducimus atque aliquid beatae modi aut distinctio. Pariatur fugit expedita sit ipsum, quos praesentium maxime accusamus eius repudiandae!</p>
                            <a class="link-parcours" href="#">Lire l'actualite </a>
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
                <h2 class="title-header-actualite">Actualites formation</h2>
                <hr class="divider">
            </div>
        </div>

        <livewire:searchbar-news />

        <button class="carousel-control-next" type="button" data-bs-target="#carouselParcours" style="padding-left: 11%;" data-bs-slide="next">
            <span class="fa fa-chevron-right fa-2x text-dark"></span>
        </button>
    </div>
</section>
@endsection
