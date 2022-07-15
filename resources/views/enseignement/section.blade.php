@extends('layouts.app')

@section('content')
    <style>
        #content-filieres {
            box-shadow: 0 0 15px rgba(0, 0, 0, .1);
            background-color: #f8fafc;
            min-height: 100vh;
            background-image: url(../images/bg-section.png);
            background-size: cover;
            background-position: 50%;
            background-repeat: no-repeat;
        }


        .card-filieres {
            transition: all ease-in-out 300ms;
            border: none;
            min-height: 250px;
            margin: 10px;
            background-color: #fff;
            background: linear-gradient(45deg, #f3f4f3, #f3f4f3);
            border-radius: 15px 0 15px 0 !important;
        }

        .card-filieres:hover {

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

        a.card-filieres {
            text-decoration: none;
            cursor: pointer;
        }

        a.card-filieres h3 {
            text-transform: capitalize;
            font-weight: bold;
            font-style: italic;
            color: #fff;
            font-size: 15px;
            line-height: 1.5rem;
        }

        #content-filieres .card figure {
            overflow: hidden;
            width: 40%;
            position: relative;
            margin-bottom: 0rem !important;
            align-items: center;
        }

        #content-filieres .card figure img {
            margin: 0;
            transition: transform .3s;
            width: 100px;
            height: 100px;
        }

        #content-filieres .card:hover figure img {
            transform: translateY(-3px)scale(1.05)rotateX(15deg);
        }


        #content-filieres .card:hover figure::after {
            transform: rotate(25deg);
            top: -40%;
            opacity: .15;
        }

        #content-filieres .card figure::after {
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

        .title-filieres {
            color: #000000;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: bold;
            font-style: normal;
            text-align: center;
            margin-left: -40px;
            line-height: 1.5rem;
        }

        .description-filieres {
            height: 100px;
            overflow: hidden;
            margin: 10px;
            color: #635a5ac7;
            text-align: center;
            line-height: 1.7rem;
        }

        .card-filieres ul {
            list-style-type: none;
            margin-left: -30px;
        }

        .card-filieres ul li {
            font-size: 12px;
            padding: 2px;
            margin-bottom: 5px;
            color: #000;
        }

        .card-filieres ul li::before {
            content: '\e64c';
            top: 1px;
            background: 0 0;
            font-weight: 700;
            margin-right: 5px;
            opacity: 1;
            color: inherit;
            font-family: Georgia, 'Times New Roman', Times, serif;
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

        .decouvrir-filieres {
            display: flex;
            color: #38c17a;
            font-weight: bold;
            font-style: italic;
            text-shadow: #fcfdfe 5px 3px 7px;
        }


        /** Styles pour les cycles  */
        .cycle {
            width: 100%;
            height: 100%;
            border: 1px inset #fff;
            overflow: hidden;
            position: relative;
            margin: 0;
            z-index: 4;
            transition: all ease-in-out 400ms;
        }

        .item-cycle:hover .cycle {
            border: 1px inset #deb857;
        }

        .item-cycle {
            margin: 0 !important;
            position: relative;
            overflow: hidden;
            min-height: 300px;
        }

        .item-cycle-1 {}

        .item-cycle-2 {}

        .decor-cycle {
            position: absolute;
            z-index: 3;
            background: rgb(45 50 60 / 28%);
            height: 100%;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
        }

        .decor-cycle-image {
            position: absolute;
            height: 100%;

            width: 100%;
            align-items: flex-start;
            top: 0;
            left: 0;
            z-index: 1;
            transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            transition-duration: .4s;
            transition-timing-function: ease-in-out;
        }

        .item-cycle:hover .decor-cycle-image {
            -webkit-transform: scale3d(1.05, 1.05, 1);
            transform: scale3d(1.05, 1.05, 1);
            transition-timing-function: cubic-bezier(0.65, 0.07, 0.32, 1.27);
            transition-duration: .6s;
        }

        .decor-cycle-image img {
            width: 100%;
            height: 100%;
        }

        .cycle p {
            text-align: center;
            color: #fff;
            font-weight: 200;
            font-style: italic;
            font-size: 17.4px;
            opacity: .8;
            line-height: 2rem;
        }

        .title-cycle {
            text-transform: lowercase;
            font-weight: normal;
            font-family: "adelle", Arial, Tahoma, Verdana, Helvetica, sans-serif;
            font-weight: 200;
            font-style: italic;
            font-size: 17.4px;
            text-align: center;
            opacity: .8;
            line-height: 2rem;
        }

        .description-cycle {
            color: #231515;
            font-weight: 200;
            font-size: 17.4px;
            text-align: center;
            opacity: .8;
            line-height: 2rem;
            margin-bottom: 20px;
        }


    </style>

    <section class="bg-cover">
        <div class="container-fluid">
            <div class="row" id="top-content">
                <div class="col-4 d-flex justify-content-center " style="align-items: center;" data-aos="zoom-in-down">
                    <img class="img img-thumbnail img-cover m-2" src="../../images/bg3.jpg"
                        style="border-radius:50%;border:none" />
                </div>
                <div class="col-8" id="description">
                    <h2 class="my-2 py-4 title-1 d-flex justify-content-start" style="align-items: center;">
                        <span class="title-type">{{ $section->libelle }}</span>
                    </h2>
                    <div class="text-description site-text col-md-12 py-2">
                        @if ($section->description_full)
                            {{ $section->description_full }}
                        @else
                            Aucune description pour le moment !!!
                        @endif
                    </div>
                    <div class="line-infos site-text d-flex justify-content-between">
                        <a class="link-filieres" href="#content-filieres">Decouvrez les filieres du parcours</a>
                        <a class="link-ensavoir" href="#" style="color:#38c172">En savoir plus!</a>
                    </div>
                    <hr style="color: #ffff">
                    <a class="link-question site-text">Des questions. Posez les ici !!!</a>
                </div>
                <div class="col-8 d-flex justify-content-end" style="z-index: 10;">
                    <a id="arrow-down" href="#content-filieres">
                        <i data-feather="arrow-down" class="text-light"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="content-filieres">

        <div class="container-fluid">
            <div class="d-flex justify-content-center py-5">
                <h2 class="title-option title-1-1 text-dark">Optez pour un <span style="font-weight: bold;"> cycle
                        d'enseignement ...</span>
                </h2>
            </div>

            <div class="row d-flex justify-content-center">
                <p class="description-cycle site-text col-md-10">
                    Le parcours {{ $section->libelle }} offre une multitude de filières reparties entre les deux cycles de
                    l'enseignement secondaire. Il est ainsi offert aux apprenants des choix de carrières précis et conforme
                    à leur besoins et moyens.
                </p>
            </div>

            <div id="cycles" class="row">
                @foreach ($cycles as $cycle)
                    @if ($cycle->id == 1)
                        <div class="col-md-6 p-3 item-cycle item-cycle-1">
                            <div class="cycle left-cycle  p-4">
                            @else
                                <div class="col-md-6 p-3 item-cycle item-cycle-2">
                                    <div class="cycle rigth-cycle  p-4">
                    @endif
                    <p class="p-3 title-2 title-cycle"><span>filieres</span> du @if ($cycle->id == 1)
                            premier cycle
                        @else
                            second cycle
                        @endif
                    </p>
                    <p class="p-3">{{ $cycle->ConditionAccess[0]->libelle }}</p>
                    <div class="p-3 d-flex justify-content-center">
                        <form method="GET" action="{{ route('filiere') }}">
                            @csrf
                            <input type="text" value="{{ $cycle->id }}" name="cycle" hidden>
                            <input type="text" value="{{ $section->id }}" name="section" hidden>
                            <button type="submit" class="btn btn-xs site-text btn-success text-white"> decouvrir les filieres</button>
                        </form>
                    </div>
            </div>
            <div class="decor-cycle-image">
                @if ($cycle->id == 1)
                    <img class="img img-fluid" src="../../images/bg2.jpg">
                @else
                    <img class="img img-fluid" src="../../images/bg3.jpg">
                @endif
            </div>
            <div class="decor-cycle"></div>
        </div>
        @endforeach
        </div>
        </div>
    </section>

    @livewire('section-actualite',['menu'=>$content])

@endsection
