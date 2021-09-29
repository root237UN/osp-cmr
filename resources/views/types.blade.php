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
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        color: #000;
        font-weight: 200;
        font-style: italic;
        text-align: left;
        opacity: .8;
        line-height: 2rem;
        padding-left: 0px;
        max-height: 100px;
    }

    .title-type {
        font-size: x-large;
        font-weight: bold;
        line-height: 25px;
        font-family: monospace, Cochin, Georgia, Times, 'Times New Roman', serif;
        text-align: center;
        text-shadow: #323a2f52 5px 10px 7px;
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

    #actualites-parcours {
        min-height: 90vh;
        position: relative;
        overflow: hidden;
    }

    #actualites-parcours .service-bg {
        width: 250px;
        padding: 55px;
        position: absolute;
        top: -10px;
        right: -100px;
        background-color: rgb(243 244 243);
        transform: rotate(55deg);
        -o-transform: rotate(55deg);
        -ms-transform: rotate(55deg);
        -moz-transform: rotate(55deg);
        -webkit-transform: rotate(55deg);
    }

    #actualites-parcours .service-bg-50 {
        width: 210px;
        padding: 35px;
        position: absolute;
        top: -10px;
        right: -100px;
        opacity: 0.6;
        background-color: rgb(243 244 243);
        transform: rotate(55deg);
        -o-transform: rotate(55deg);
        -ms-transform: rotate(55deg);
        -moz-transform: rotate(55deg);
        -webkit-transform: rotate(55deg);
    }

    .title-actualites-parcours {
        color: #242738;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        margin-top: 30px;
        font-style: italic;
        font-size: 24px;
    }

    .divider {
        width: 15%;
        height: 3px !important;
        color: #38c172;
        text-align: center;
    }

    .rechercher-parcours {
        background-color: rgba(106, 214, 216, 0.9);
        max-width: 500px;
        min-height: 400px;
        position: relative;
        overflow: hidden;
        border-radius: 15px 0 15px 0 !important;
    }

    .title-rechercher {
        font-size: 19px;
        text-transform: uppercase;
        margin-bottom: 15px;
        text-align: left;
        color: #fff;
        font-weight: bold;
    }

    .rechercher-header {
        background-color: rgba(106, 214, 216, 0.2);
        padding: 35px 40px 0px 40px !important;
    }

    .rechercher-header p {
        line-height: 28px;
        font-weight: 400;
        font-size: 17px;
        color: #0a3546 !important;
        text-align: center;
        font-style: italic;
    }

    .rechercher-body {
        background-color: #fff;
        min-height: 100px;
        padding: 10px;
    }

    .rechercher-body .content p {
        font-size: 17px;
        font-weight: 700;
        /*font-family: Georgia, 'Times New Roman', Times, serif;*/
        font-style: italic;
        opacity: 0.9;
        font-family: monospace;
    }

    input[name='metier'] {
        border: 0 !important;
        box-shadow: inset 0px 1px 6px rgba(0, 0, 0, 0.2);
    }

    .carousel-item {
        min-height: 90vh;
        background-color: transparent;
        position: relative;
    }

    .left-part {
        position: absolute;
        top: 90px;
        bottom: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: none;
        border: 0;
        opacity: 5;
        transition: opacity 0.15s ease;
    }

    #item-actualite {
        margin-left: 25%;
        position: relative;
        top: 100px;
        min-height: 250px;
    }

    .header-actualites {
        position: absolute;
        width: 100%;
        height: 100px;
        bottom: 0;
        top: 0px;
        right: 0;
        left: 0;
        margin-bottom: 20px;
        margin-top: 0px;
    }
    .item-actualite{
        position: relative;
        top: 100px;
    }
</style>

<section class="bg-cover">
    <div class="container">
        <div class="row py-4">
            <div class="col-4 d-flex justify-content-center" style="align-items: center;" data-aos="zoom-in-down">
                <img class="img img-thumbnail m-2" src="../images/bg3.jpg" style="border-radius:50%;border:none" />
            </div>
            <div class="col-8" id="description">
                <h2 class="my-2 py-4  d-flex justify-content-center" style="align-items: center;">
                    <span class="text-uppercase m-2 title-type">{{$type->libelle}}</span>
                </h2>
                <p class="text-description col-md-12">{{ $type->description_full }}</p>
                <div class="line-infos d-flex justify-content-between">
                    <a class="link-parcours">Des questions !</a>
                    <a class="link-ensavoir">En savoir plus!</a>
                </div>
                <hr>
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
            <h1 class="title-option">Choisissez <span id='typed' class="" style="font-weight: bold;">une option</span></h1>
        </div>

        <div class="row d-flex justify-content-center" id='options'>

            @forelse($type->optionEnseignements as $option)
            <div class="col-4 d-flex justify-content-center">
                <a class="card card-option rounded-3" href="{{ route('parcours.show', ['code' => $option->code ]) }}">
                    <div class="card-body">
                        <img class="img img-thumbnail img-option py-4" src="" />
                        <h3 class="py-4">{{$option->libelle}}</h3>
                        <p class="option-text">{{$option->description}}</p>
                    </div>
                </a>
            </div>
            @empty
            <div class='row d-flex justify-content-center'>
                <div class="col-4 d-flex justify-content-center">
                    <a class="card card-option rounded-3" style="min-height: 150px;">
                        <div class="card-body">
                            <h3 class="py-4">Aucune option trouvee !!!</h3>
                        </div>
                    </a>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>


<section id="actualites-parcours">

    <div id="carouselParcours" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">


            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-9" id="item-actualite">
                        <div class="col-10" style="margin-left: 50px;" id="description">
                            <h2 class="my-2 py-4  d-flex justify-content-start" style="align-items: center;">
                                <span class="text-uppercase m-2 title-type">Actualite</span>
                            </h2>
                            <p class="text-description col-md-12 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum vero culpa, debitis ducimus atque aliquid beatae modi aut distinctio. Pariatur fugit expedita sit ipsum, quos praesentium maxime accusamus eius repudiandae!</p>
                            <a class="link-parcours" href="#">Lire l'actualite </a>
                            <hr>
                            <time datetime="2021-06-01 00:00:00 +0000 UTC"><i class="ti-alarm-clock"></i>01 June 2021</time>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-actualites">
            <div class="service-bg"></div>
            <div class="row" style="justify-content: center;">
                <h2 class="title-actualites-parcours">Actualites sur les enseignements</h2>
                <hr class="divider">
            </div>
        </div>

        <div class="col-md-3 left-part">
            <div class="rechercher-parcours">
                <div class="service-bg-50"></div>

                <div class="rechercher-header">
                    <h2 class="title-rechercher">Ton parcours en main</h2>
                    <p>Les métiers ouvert sur marche Camerounais</p>
                </div>
                <div class="rechercher-body">
                    <div class="content">
                        <p><span>Travailler dans</span> <span id="typed2"></span> </p>
                        <form class="form-inline form row m-1">
                            @csrf
                            <div class="form-group col-10 p-0">
                                <input type="text" class="form-control" value="" name="metier">
                            </div>
                            <button type="submit" class="p-0 btn btn-xs text-white btn-success col d-flex" style="justify-content: center;align-items: center;">
                                <i class="fa fa-search fa-2x"></i>
                            </button>
                        </form>
                    </div>
                    <div class="content">
                        <p><span>Decouvrir les metiers </span> </p>
                        <a class="p-0 btn btn-xs text-white btn-success col d-flex" style="justify-content: center;align-items: center;">
                            <span class="text-uppercase m-2">Decouvrir</span>
                            <i class="fa fa-chevron-right fa-1x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselParcours" style="padding-left: 11%;" data-bs-slide="next">
            <span class="fa fa-chevron-right fa-2x text-dark"></span>
        </button>
    </div>



</section>
@endsection
