@extends('layouts.app')

@section('content')
<style>
    .top-content button {
        font-family: 'Aleo', serif;
        text-transform: uppercase;
        font-weight: bold;
    }

    .title-content-1 {
        font-family: 'Mate SC', serif;
    }

    /**Style carte */
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
        padding-bottom: 50px;
        padding-top: 40px;
        background-color: #243a5e;
    }

    ul {
        list-style-type: none;
        padding-left: 0;
        margin: 0;
    }

    #platform-highlights li {
        width: 370px;
        line-height: 1.8;
        padding: 10px 20px 10px;
        text-align: justify;
        transition: all ease-in-out 350ms 100ms;
        background-color: #f6f6f6;
        align-items: center;
        display: flex;
    }

    #platform-highlights li:hover {
        transform: translateY(1px)scaleY(.95);
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

    #map {
        margin-top: -80px
    }

    #map svg {
        cursor: pointer;
    }

    .map path {
        transition: all ease-in-out 350ms;
    }

    .map path:hover {
        fill: #243a5e !important;
    }

    .map path.is-active {
        fill: #243a5e !important;
    }

    .map-list li {
        cursor: pointer;
    }

    #map li span.is-active {
        font-weight: bold;
        color: #deb857;
    }
</style>
<div class="container-fluid">
    <div class="">
        <livewire:top-navbar-etablissement />
    </div>
</div>

<div id="header-filiere">
    <div class="row">
        <div class="col-12">
            <div class="m-4">
                <h1 class="text-capitalize header-title">
                    <a href="#presentation-filiere" style="color: #fff;font-family: 'Gelasio', serif;">Etablissement d'enseignement secondaire</a>
                </h1>
            </div>
            <div class="m-4">
                <p class="header-title-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Feugiat sed lectus vestibulum mattis ullamcorper velit.
                </p>
            </div>
        </div>
    </div>
</div>

<section id="content-filiere">
    <div class="container">
        <div class="row d-flex justify-content-between" style="align-items: center;">
            <nav class="col-md-10" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrum">
                <ol class="breadcrumb my-1">
                    <li class="breadcrumb-item breadcrumb-item-first">Orientation</li>
                    <li class="breadcrumb-item">Etablissements</li>
                    <li class="breadcrumb-item active" aria-current="page">Etablissement d'enseignement secondaire</li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="platform-highlights">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h2 class="col-8 text-capitalize py-3 text-center" style="font-family: 'Gelasio', serif;">Cartographie des etablissements d'enseignements secondaire</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="row d-flex justify-content-center" id="map">
                    @include('partials.carte')
                    <div class="col-5 map-list" style="margin-top: 145px">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span id="link_sud">
                                    <i class="fas mx-2 fa-check"></i>Region du Sud
                                </span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_nord"><i class="fas mx-2 fa-check"></i>Region du Nord </span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_littoral"><i class="fas mx-2 fa-check"></i>Region du Littoral</span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_centre"><i class="fas mx-2 fa-check"></i>Region du Centre</span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_est"><i class="fas mx-2 fa-check"></i>Region du Est</span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_ouest"><i class="fas mx-2 fa-check"></i>Region du Ouest </span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_nord_ouest"><i class="fas mx-2 fa-check"></i>Region du Nord-Ouest </span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_sud_ouest"><i class="fas mx-2 fa-check"></i>Region du Sud-Ouest </span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_adamaoua"><i class="fas mx-2 fa-check"></i>Region de l'adamaoua </span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_extreme_nord"><i class="fas mx-2 fa-check"></i>Region du Extreme-Nord</span>
                                <span class="badge mx-2 bg-secondary">4</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
        $('[id*=region_').on('click', function() {
            //On recupere l'ID de la region
            let region = $(this);
            let regionId = $(this)["0"].id;

            let regions = $('[id*=region_');
            let txt = regionId.replace('region_', '');
            let nom = txt.replace('_', ' ');

            regions.css('fill', '#fcfcfd');
            region.css('fill', '#deb857');

        });


        let regions = $('[id*=region_');
        let links = $('[id*=link_');
        let map = document.getElementById('map');

        let activeArea = function(id) {
            for (let index = 0; index < links.length; index++) {
                const link = links[index];
                const region = regions[index];
                link.classList.remove('is-active');
                region.classList.remove('is-active');
            }
            if (id !== undefined) {
                document.querySelector('#link_' + id).classList.add('is-active');
                document.querySelector('#region_' + id).classList.add('is-active');
            }
        };

        for (let index = 0; index < regions.length; index++) {
            const element = regions[index];
            element.addEventListener('mouseenter', function(e) {
                let id = this.id.replace('region_', '');
                activeArea(id);
            })
        }

        for (let index = 0; index < links.length; index++) {
            const element = links[index];
            element.addEventListener('mouseenter', function(e) {
                let id = this.id.replace('link_', '');
                activeArea(id);
            })
        }

        map.addEventListener('mouseover', function() {
            activeArea();
        })

    });
</script>
@endsection
