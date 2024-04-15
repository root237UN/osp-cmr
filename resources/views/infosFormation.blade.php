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
            background: linear-gradient(45deg, #243a5e, #243a5e)
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
            font-family: "Trebuchet MS", Helvetica, sans-serif;
        }

        .title-type {
            font-size: x-large;
            font-weight: bold;
            line-height: 25px;
            font-family: monospace, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
            text-shadow: #323a2f52 5px 10px 7px;
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

        hr {
            color: #ffffff;
        }

        .line-infos {
            align-items: center;
        }

        .link-ensavoir {
            color: #ffffff;
            font-weight: 200;
            font-style: italic;
            text-decoration: none;
            transition: all ease-in-out 300ms;
        }

        .link-ensavoir:hover {
            color: #38c172;
        }

        /** Style pour les infos sur le type de formation */
        #plus-type-formation {
            min-height: 50ch;
            background-color: ##243a5e;
        }

        .title-plus-type,
        .left-part h4 {
            font-weight: 700;
            text-transform: capitalize;
            text-align: center;
            font-style: italic;
            opacity: .8;
            line-height: 2rem;
            padding-left: 0px;
            max-height: 100px;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
        }

        .left-part {
            color: #636363;
        }

        .left-part ul {
            list-style-type: none;
        }

        .left-part p,
        .left-part li {
            color: #636363;
            font-weight: 200;
            font-style: italic;
            font-size: 15.4px;
            text-align: left;
            opacity: .8;
            text-align: justify;
            line-height: 2rem;
        }

        .left-part li i {
            color: #deb857;
        }

        .right-part {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 0;
        }

        .left-part,
        .right-part {
            max-height: 400px;
            overflow: hidden;
        }

        .cover-img {
            background-color: #818182;
            position: relative;
            top: -100%;
            bottom: 0;
            right: 0;
            left: 0;
            height: 100%;
            width: 100%;
            opacity: 0.5;
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
                        <span class="text-uppercase m-2 title-type">{{ $type->libelle }}</span>
                    </h2>
                    <p class="text-description col-md-12 py-2">{{ $type->description_end }}</p>
                    <div class="line-infos d-flex justify-content-between">
                        <a class="link-parcours" href="#parcours">Decouvrez les formations</a>
                    </div>
                    <hr>
                </div>
                <div class="col-8 d-flex justify-content-end" style="z-index: 10;">
                    <a id="arrow-down" href="#content-parcours">
                        <i data-feather="arrow-down" class="text-light"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="plus-type-formation" class="py-4 p-4 my-4">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <h3 class=" col-6 my-4 m-4 p-4 py-4 title-plus-type">Pourquoi choisir une {{ $type->libelle }}</h3>
            </div>
            <div class="container">
                <div class="row my-4 py-4">
                    <div class="col-7 left-part">
                        <h4 style="text-align:left;">
                            <i class="fas fa-star"></i>
                            <span>Competences</span>
                        </h4>
                        <p>Ces formations ont pour vocation d’assurer l’insertion professionnelle, la compétitivité et la
                            transformation socioéconomique. Elles donnent acces a une panoplie de competences necessaire a
                        </p>
                        <p>
                        <ul>
                            @forelse($type->AvantageTypeFormation as $avantage)
                                <li>
                                    <i class="fas fa-dot-circle"></i>
                                    {{ $avantage->libelle }}
                                </li>
                            @empty
                                <li>Vide !!!</li>
                            @endforelse
                        </ul>
                        </p>
                    </div>
                    <div class="col-5 right-part">
                        <img src="../images/bg6.jpg" style="height:100%;width:100%;">
                        <div class="cover-img"></div>
                    </div>
                </div>
                <div class="row my-4 py-4">

                    <div class="col-7 right-part">
                        <img src="../images/bg4.jpg" style="height:100%;width:100%;">
                        <div class="cover-img"></div>
                    </div>
                    <div class="col-5 left-part" style="padding-left: 20px;">
                        <h4 style="text-align:left;">
                            <i class="fas fa-star"></i>
                            <span>Personnes cibles</span>
                        </h4>
                        <p>la formation professionnelle et la formation par la voie de l’apprentissage constituent une bouée
                            de sauvetage pour de nombreux laissés-pour-compte</p>
                        <p>
                        <ul>
                            @forelse($type->PersonneCibleTypeFormation as $personne)
                                <li>
                                    <i class="fas fa-dot-circle"></i>
                                    {{ $personne->libelle }}
                                </li>
                            @empty
                                <li>Vide !!!</li>
                            @endforelse
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
