@extends('layouts.app')

@section('content')

<style>

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

</style>

<section class="bg-cover">
    <div class="container-fluid">
        <div class="row" id="top-content">
            <div class="col-md-4 d-flex justify-content-center " style="align-items: center;" data-aos="zoom-in-down">
                <img class="img img-thumbnail img-cover m-2" src="../images/bg3.jpg" style="border-radius:50%;border:none" />
            </div>
            <div class="col-md-8" id="description">
                <h2 class="my-2 py-4 title-1-1 d-flex justify-content-start">
                    <span class="" style="">{{$formation->libelle}}</span>
                </h2>
                <div class="text-description site-text col-md-12 text-white py-2">{{$formation->description_full}}</div>
                <div class="line-infos d-flex justify-content-between">
                    <a class="link-parcours" href="{{route('formation.all',['code' => $formation->code])}}">Découvrez les formations</a>
                    <a class="link-ensavoir" href="#">En savoir plus!</a>
                </div>
                <hr>
                <a class="link-question site-text">Des questions. Posez les ici !!!</a>
            </div>
            <div class="col-8 d-flex justify-content-end" style="z-index: 10;">
                <a id="arrow-down" href="#content-parcours">
                    <i data-feather="arrow-down" class="text-light"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
