@extends('layouts.view')

@section('content')
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
    .card-cover:hover .decor-card{
        border: 20px solid #38c17205;
    }
</style>

<section id="platform-highlights" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center mb-5">
                <h1 class="col-8 text-capitalize text-center" style="font-weight: 700;">Un guide pour un avenir meilleur</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <h3 class="col-8 text-capitalize text-center"  data-aos="zoom-out-down"  style="font-weight: 400;">Une plateforme qui vous accompagne en fonction de vos besoins comme un veritable <strong>conseiller</strong>.</h3>
        </div>
        <ul>
            <li class="item card-cover h-100 overflow-hidden rounded-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <a href="#">
                    <h4 class="card-header text-capitalize">Decouvrer vos atouts</h4>
                </a>
                <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fuga porro vitae distinctio, repellendus dolores sed. Repudiandae eum perferendis corrupti maxime consequuntur vitae qui, dicta nam, explicabo voluptate, recusandae exercitationem.  </p>
                <div class="decor-card"></div>
            </li>
            <li class="item card-cover h-100 overflow-hidden rounded-5">
                <a href="#">
                    <h4 class="card-header text-capitalize">Evaluez les opportunites</h4>
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
                    <h4 class="card-header text-capitalize">Decouvrez un metier </h4>
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
@endsection
