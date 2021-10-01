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
    <div class="container">
        <div class="row py-4">
            <div class="col-4 d-flex justify-content-center " style="align-items: center;" data-aos="zoom-in-down">
                <img class="img img-thumbnail m-2" src="../images/bg3.jpg" style="border-radius:50%;border:none" />
            </div>
            <div class="col-8" id="description">
                <h2 class="my-2 py-4  d-flex justify-content-start">
                    <span class="text-uppercase m-2 title-type" style="text-align: center;">{{$formation->libelle}}</span>
                </h2>
                <p class="text-description col-md-12 py-2">{{$formation->description_full}}</p>
                <div class="line-infos d-flex justify-content-between">
                    <a class="link-parcours" href="#">Decouvrez les formations</a>
                    <a class="link-ensavoir" href="#">En savoir plus!</a>
                </div>
                <hr>
                <p style="font-style: italic;font-family: 'Gelasio', serif;color:#fff;">Des questions. Posez les ici !!!</p>
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
