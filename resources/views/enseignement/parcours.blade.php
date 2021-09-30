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
        box-shadow: 0 0 4px rgba(0, 0, 0, .1);
        background-color: #fff;
        min-height: 60vh;
        display: flex;
        flex-direction: column;
        position: relative;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    section.bg-cover::before {
        /*background: linear-gradient(45deg, #367bf0, #367bf0);
        background: linear-gradient(45deg, transparent, transparent);*/
        background: linear-gradient(45deg, #f9f9f9, #f9f9f9);
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
        color: #231515;
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

    #content-parcours {
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
        background-color: #f8fafc;
        min-height: 100vh;
        background-image: url(../images/bg-section.png);
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat;
    }

    .title-option {
        font-family: 'Gelasio', serif;
    }


    .card-parcours {
        transition: all ease-in-out 300ms;
        border: none;
        min-height: 250px;
        margin: 10px;
        background-color: #fff;
        background: linear-gradient(45deg, #f3f4f3, #f3f4f3);
        border-radius: 15px 0 15px 0 !important;
    }

    .card-parcours:hover {

        box-shadow: 0 5px 20px rgba(0, 0, 0, .15), 0 4px 4px -2px rgba(0, 0, 0, .1) !important;
        opacity: 1;
        /*background: linear-gradient(45deg, #38c17252, #00000096);*/
        transform: translateY(-5px)scale(1);
    }

    .option-text {
        color: #fff;
        font-size: 15px;
    }

    .img-option {
        min-width: 50px;
        min-height: 50px;
        border-radius: 50px;
    }

    a.card-parcours {
        text-decoration: none;
        cursor: pointer;
    }

    a.card-parcours h3 {
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

    a.link-parcours:hover {}

    .decouvrir-parcours::after,
    .link-parcours::after {
        content: "›";
        display: inline-block;
        margin-left: 0.2em;
        will-change: transform;
        transition: transform 0.15s linear 0s;
    }

    #content-parcours .card figure {
        overflow: hidden;
        width: 40%;
        position: relative;
        margin-bottom: 0rem !important;
        align-items: center;
    }

    #content-parcours .card figure img {
        margin: 0;
        transition: transform .3s;
        width: 100px;
        height: 100px;
    }

    #content-parcours .card:hover figure img {
        transform: translateY(-3px)scale(1.05)rotateX(15deg);
    }


    #content-parcours .card:hover figure::after {
        transform: rotate(25deg);
        top: -40%;
        opacity: .15;
    }

    #content-parcours .card figure::after {
        content: '';
        z-index: 10;
        width: 200%;
        height: 100%;
        top: -90%;
        left: -20px;
        opacity: .1;
        transform: rotate(45deg);
        background: linear-gradient(to top, rgba(255, 255, 255, 0), #fff 15%, rgba(255, 255, 255, .5));
        transition-property: transform, top, opacity;
        transition-duration: .3s;
        position: absolute;
    }

    .title-parcours {
        color: #000000;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: bold;
    font-style: normal;
    text-align: left;
    padding-left: 12px;
    margin-left: -40px;
    line-height: 1.2rem;
    font-family: 'Gelasio', serif;
    }

    .description-parcours {
        height: 100px;
        overflow: hidden;
        margin: 10px;
        color: #635a5ac7;
        text-align: center;
        line-height: 1.7rem;
    }

    .card-parcours ul {
        list-style-type: none;
        margin-left: -30px;
    }

    .card-parcours ul li {
        font-size: 12px;
        padding: 2px;
        margin-bottom: 5px;
        color: #000;
    }

    .card-header {
        min-height: 150px;
        border-radius: 15px 0 0 0 !important;
        border-bottom: none;
    }

    .card-header-1 {
        background-color: #f2d9e3;
    }

    .card-header-2 {
        background-color: #f2e8d9;
    }

    .card-header-3 {
        background-color: rgba(106, 214, 216, 0.9);
    }

    .card-header-4 {
        background-color: #c5fff4;
    }

    .card-header-5 {
        background-color: #dfdfdf;
    }

    .decouvrir-parcours {
        display: flex;
        color: #38c17a;
        font-weight: bold;
        font-style: italic;
        text-shadow: #fcfdfe 5px 3px 7px;
    }
</style>

<section class="bg-cover">
    <div class="container">
        <div class="row py-4">
            <div class="col-4 d-flex justify-content-center " style="align-items: center;" data-aos="zoom-in-down">
                <img class="img img-thumbnail m-2" src="../images/bg3.jpg" style="border-radius:50%;border:none" />
            </div>
            <div class="col-8" id="description">
                <h2 class="my-2 py-4  d-flex justify-content-start" style="align-items: center;">
                    <span class="text-uppercase m-2 title-type">{{$option->libelle}}</span>
                </h2>
                <p class="text-description col-md-12 py-2">{{$option->description_full}}</p>
                <div class="line-infos d-flex justify-content-between">
                    <a class="link-parcours" href="#parcours">Decouvrez les parcours</a>
                    <a class="link-ensavoir" href="#" style="color:#38c172">En savoir plus!</a>
                </div>
                <hr style="color: #231515">
                <p style="font-style: italic;font-family: 'Gelasio', serif;">Des questions. Posez les ici !!!</p>
            </div>
            <div class="col-8 d-flex justify-content-end" style="z-index: 10;">
                <a id="arrow-down" href="#content-parcours">
                    <i data-feather="arrow-down" class="text-light"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="content-parcours">

    <div class="container">
        <div class="d-flex justify-content-center py-5">
            <h1 class="title-option">Choisissez <span class="text-capitalize" style="font-weight: bold;">Un parcours ...</span></h1>
        </div>

        <div class="row d-flex justify-content-center" id="parcours">
            @forelse($option->sectionEnseignement as $parcours)

            <div class="col-4">
                <a class="card card-cover card-parcours" href="{{ route('section',  ['code' => $parcours->id ]) }}">
                    @if($parcours->id % 2 == 0)
                    <div class="d-flex justify-content-between py-2 card-header  card-header-2">
                        @elseif($parcours->id % 3 == 0)
                        <div class="d-flex justify-content-between py-2 card-header  card-header-3">
                            @elseif($parcours->id % 5 == 0)
                            <div class="d-flex justify-content-between py-2 card-header  card-header-4">
                                @else
                                <div class="d-flex justify-content-between py-2 card-header  card-header-5">
                                    @endif
                                    <figure class="figure figure-img d-flex justify-content-center">
                                        <img class="img img-fluid" src="../images/bg3.jpg" style="border-radius: 9px;">
                                    </figure>
                                    <div class="col-6">
                                        <h4 class="title-parcours py-2">{{$parcours->libelle}}</h4>
                                        <ul class="list-group">
                                            <?php
                                            $tab = [];
                                            $tab = $parcours->filiereEnseignement;
                                            $i = 0;
                                            if (count($tab) > 0) {
                                                foreach ($tab as $filiere) {
                                                    $i+=1;
                                                    echo "<li class='item'><i class='fas fa-check' style='margin-right:3px;font-size: 10px;'></i>" . $filiere->libelle . "</li>";
                                                    if($i == 3) break;
                                                }
                                            } else {
                                                echo "<li>Aucune filiere !!!</li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex-column d-flex justify-content-between">
                                    <p class="description-parcours">{{$parcours->description}}</p>
                                    <div class="d-flex justify-content-center py-3">
                                        <span class="decouvrir-parcours">Decouvrir le parcours</span>
                                    </div>
                                </div>
                </a>
            </div>
            @empty
            <div class='row d-flex justify-content-center'>
                <div class="col-4 d-flex justify-content-center">
                    <a class="card card-parcours rounded-3" style="min-height: 150px;">
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

<!--<section id="actualites-parcours">

    <div id="carouselParcours" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item ">
                <div class="item-actualite">
                    <img class=" img" src="../images/bg3.jpg" width="100%" height="500px">

                    <div class="carousel-caption text-start" style="top: 0;left: 30%">
                        <h1 class="text-white">Example headline.</h1>
                        <p class="text-description text-dark py-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis sequi minus nisi consequuntur, eum illo at laudantium quia quibusdam amet nemo aspernatur commodi unde doloremque inventore fugiat sit laborum saepe!</p>
                        <a class="link-parcours" href="#">Lire l'actualite </a>
                        <hr>
                        <time datetime="2021-06-01 00:00:00 +0000 UTC"><i class="ti-alarm-clock"></i>01 June 2021</time>
                    </div>
                </div>
            </div>

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
                <h2 class="title-actualites-parcours">Actualites des parcours</h2>
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
                                        -->


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

@endsection
