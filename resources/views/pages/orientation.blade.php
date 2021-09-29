@extends('layouts.app')

@section('content')
<style>
    #orientations-types {
        /*padding-top: var(--nav-height);
        margin-top: calc(var(--nav-height) * -1);*/
    }
    .carousel-item {
        min-height: 515px;
    }

    #orientations-types {
        /*padding-bottom: max(60vh, 200px);
        min-height: 100px;*/
        background-image: url(images/bg-section.png);
    }

    #orientations-types h1 {
        margin: 30px 0;
        font-weight: 100;
        width: 500px;
        margin-left: 50%;
        transform: translateX(-220px);
    }

    #orientations-types__cards {}

    #orientations-types__cards div.card-cover {
        margin-left: 25px;
        margin-right: 25px;
    }

    .card-enseignement {
        transition: all ease-in-out 200ms;
        border: none;
    }

    .card-enseignement:hover {
        box-shadow: 0 5px 20px rgba(0, 0, 0, .15), 0 4px 4px -2px rgba(0, 0, 0, .1) !important;
        opacity: 1;
        transform: translateY(-5px)scale(1);
    }

    /*.card-enseignement .card-body::after {
        position: absolute;
        bottom: -20px;
        left: 50%;
        content: '\e623 Recommended';
        transform: translateX(-50%);
        font-size: x-small;
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
        transition: all ease-out 200ms;
        text-shadow: 0 2px 5px rgba(0, 0, 0, .25);
        box-shadow: inset 0 -0.43em rgba(0, 0, 0, .2), 0 2px 20px transparent;
    }

    .card-enseignement .card-body::after {
        display: inline-block;
        background: green;
        box-shadow: 0 1px 5px #000, inset 0 1px rgba(255, 255, 255, .2);
        border-radius: 999px;
        padding: 5px 20px;
        font-size: 14px;
        color: #fff !important;
        font-family: themify, var(--font-family), sans-serif;
        border: 1px solid rgba(0, 0, 0, .2);
        transition: transform .2s;
        white-space: nowrap;
    }*/

    .card-image {
        min-height: 150px;
    }

    .btn-discover {
        font-size: x-small;
        font-weight: bold;
        font-family: 'Times New Roman', Times, serif;
        transition: all ease-out 200ms;
        text-shadow: 0 2px 5px rgba(0, 0, 0, .25);
        box-shadow: inset 0 -0.43em rgba(0, 0, 0, .2), 0 2px 20px transparent;
    }

    .btn-discover:hover {
        transform: translateY(5px)scale(1);
        border: 0px solid #000;
        background-color: #fff;
        color: #000 !important;
        box-shadow: inset 0 -3px rgba(0, 0, 0, .2), 0 0 10px darkgrey;
    }
    .carousel-indicators [data-bs-target] {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    padding: 0;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000;
    background-clip: padding-box;
    border: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    transition: opacity 0.6s ease;
}
</style>

<div class="container">
    <div class="d-flex justify-content-center">
        <h1>Choisissez <strong>un</strong> <span></span><span class="caret">|</span></h1>
    </div>
</div>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators" style="    background-color: #f8fafc; margin-bottom: -10px;">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">

            <section id="orientations-types" class=" container-fluid">

                <div id="orientations-types__cards" class="container">
                    <h2 class="pb-2 pt-2 border-bottom" style="font-weight: bold;font-style:italic;">Enseignement</h2>

                    <div class="row d-flex justify-content-center p-3">
                        <div class="card-cover item card shadow-sm rounded-5 col-4 card-enseignement" data-aos="flip-left">
                            <div class="row p-2 card-image" style="background-color: #dfdfdf;align-items:center;">
                                <div class="col-5 d-flex justify-content-center">
                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;"></div>
                                </div>
                                <h3 class="col-7 justify-content-center text-center">Enseignement Technique</h3>
                            </div>
                            <p class="card-body card-text text-decoration-none">Single or multiple boot Kali, giving you complete control over the hardware access (perfect for in-built Wi-Fi and GPU), enabling the best performance.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success col-5 p-2 btn-sm rounded-5 text-uppercase btn-discover text-white mb-5">Decouvrir</button>
                            </div>
                        </div>

                        <div class="card-cover item card col-4 shadow-sm h-100 overflow-hidden rounded-5 card-enseignement " data-aos="flip-right">
                            <div class="row p-2 card-image" style="background-color: #c5fff4;align-items:center;">
                                <div class="col-5 d-flex justify-content-center">
                                    <div style="height: 100px; width: 100px; background-color: #fff;border-radius:50px;"></div>
                                </div>
                                <h3 class="col-7 justify-content-center text-center">Enseignement Generale</h3>
                            </div>
                            <p class="card-body">VMware &amp; VirtualBox pre-built images. Allowing for a Kali install without altering the host OS with additional features such as snapshots. Vagrant images for quick spin-up also available.</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success col-5 p-2 btn-sm rounded-5 text-uppercase btn-discover text-white mb-5">Decouvrir</button>
                            </div>
                        </div>
                    </div>

                    <div class="break"></div>
                </div>
                <br>
            </section>
        </div>
        <!--<div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
            </svg>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
            </svg>

            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div>-->
    </div>
</div>

@endsection
