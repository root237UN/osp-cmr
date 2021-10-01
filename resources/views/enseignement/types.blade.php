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
        font-size: 14.4px;
        text-align: left;
        opacity: .8;
        line-height: 2rem;
    }

    section.bg-cover img {
        border: 1px solid transparent;
        height: 60px;
        width: 60px;
        background-color: whitesmoke;
        opacity: .8;
    }

    #description {
        z-index: 10;
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
    }

    #content-option {
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
        background-color: transparent;
        padding-bottom: 50px;
    }

    .title-option {
        color: #fff;
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
        text-align: center;
        border: 1px inset #3cad7442;
    text-align: center;
    background-color: #f8fafc0f;
    }

    .card-option:hover {

        box-shadow: 0 5px 20px rgba(0, 0, 0, .15), 0 4px 4px -2px rgba(0, 0, 0, .1) !important;
        opacity: 1;
        background: linear-gradient(45deg, #38c17252, #38c17252);
        transform: translateY(-5px)scale(1);
    }

    .option-text {
        color: #ffffff;
        font-weight: 200;
        font-style: italic;
        font-size: 14.4px;
        text-align: center;
        opacity: .8;
        line-height: 1.5rem;
    }

    .option-text::after {
        position: absolute;
        bottom: -20px;
        left: 50%;
        content: 'Decouvrir';
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
        transition: transform .2s;
        white-space: nowrap;
        font-family: 'Gelasio', serif;
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
        font-family: 'Gelasio', serif;
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
    <div class="container-fluid" style="padding-left:6%;padding-right:6%;">
        <div class="row py-4">
            <div class="col-6" id="description">
                <h2 class="my-2 py-4  d-flex justify-content-start" style="align-items: center;">
                    <span class="title-type" style="font-style: italic;text-transform: capitalize;">{{$type->libelle}}</span>
                </h2>
                <p class="text-description col-md-12">{{ $type->description_full }}</p>
                <div class="line-infos d-flex justify-content-between">
                    <a class="link-parcours">Des questions !</a>
                    <a class="link-ensavoir">En savoir plus!</a>
                </div>
                <hr>
                <p style="font-style: italic;font-family: 'Gelasio', serif;color: #fff;">Des questions. Posez les ici !!!</p>
            </div>
            <div class="col-6 pt-4" id="content-option">
                <div class="">
                    <div class="d-flex justify-content-center pt-0 py-3">
                        <h2 class="title-option">Choisissez <span class="" style="font-weight: bold;">une option ...</span></h2>
                    </div>

                    <div class="row d-flex justify-content-between" id='options'>

                        @forelse($type->OptionEnseignements as $option)
                        <div class="col-6 d-flex justify-content-center">
                            <a class="card card-option rounded-3" href="{{ route('parcours.show', ['code' => $option->code ]) }}">
                                <div class="card-body">
                                    <img class="img img-fluid img-option " src="../images/bg2.jpg" />
                                    <h3 class="py-4">{{$option->libelle}}</h3>
                                    <p class="option-text">{{$option->description}}</p>
                                </div>
                            </a>
                        </div>
                        @empty
                        <div class='row d-flex justify-content-center'>
                            <div class="col-5 d-flex justify-content-center">
                                <a class="card card-option rounded-3" style="min-height: 150px;">
                                    <div class="card-body">
                                        <h3 class="py-4 mt-4">Aucune option trouvee !!!</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-12 my-4 d-flex justify-content-center" style="z-index: 10;">
                <a id="arrow-down" href="#actualites-onglet">
                    <i data-feather="arrow-down" class="text-light"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!--<section id="content-option">
    <div class="container">
        <div class="d-flex justify-content-center py-5">
            <h1 class="title-option">Choisissez <span class="" style="font-weight: bold;">une option ...</span></h1>
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
                            <h3 class="py-4 mt-4">Aucune option trouvee !!!</h3>
                        </div>
                    </a>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>-->

<section id="actualites-onglet">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-9" id="item-actualite">
                    <div class="col-10" id="description" style="box-shadow: none;margin-left: 50px;">
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

@endsection
