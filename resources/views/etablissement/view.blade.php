@extends('layouts.app')
@section('title')
    <title>OSP - Cameroun  | Etablissement d'enseignement</title>
@endsection

@section('css')

<link rel="stylesheet" href="{{asset('datatable/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('datatable/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
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
        margin-top: -110px
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

    .link-consulter-filiere {
        font-size: 13px;
        text-align: center;
        color: #243a5e;
        font-style: italic;
    }

    #data-ecoles-visitor tbody tr {
        font-size: 12px;
        cursor: initial;
    }

    .accordion-item {
        border: none;
    }

    .accordion-button:not(.collapsed) {
        color: #fff !important;
        background-color: #243a5e !important;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px !important;
    }

    .accordion-button {
        background-color: #fff !important;
        color: #243a5e !important;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px !important;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="mt-5 pt-5">
        <livewire:top-navbar-etablissement />
    </div>
</div>

<div id="header-filiere">
    <div class="row">
        <div class="col-12">
            <div class="m-4">
                <h1 class=" header-title">
                    <a href="#presentation-filiere" style="color: #fff;font-family: 'Gelasio', serif;">{{$menu->libelle}}</a>
                </h1>
            </div>
            <div class="m-4">
                <p class="header-title-description">
                    {{$menu->description}}
                </p>
            </div>
        </div>
    </div>
</div>

<section id="content-filiere" style="min-height: 80ch;">
    <div class="container mt-2">
        <div class="row d-flex justify-content-between" style="align-items: center;">
            <nav class="col-md-10" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrum">
                <ol class="breadcrumb my-1">
                    <li class="breadcrumb-item breadcrumb-item-first">Orientation</li>
                    <li class="breadcrumb-item">Etablissements</li>
                    <li class="breadcrumb-item active" aria-current="page">{{$menu->libelle}}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="platform-highlights">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h2 class="col-8 py-3 text-center" style="font-family: 'Gelasio', serif;">
                        <a href="#list-ecoles">Cartographie des {{$menu->libelle}} </a>
                    </h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="row d-flex justify-content-center" id="map">
                    @include('partials.carte')
                    <div class="col-5 map-list" style="margin-top: 145px">
                        @if($nbres)
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span id="link_adamaoua"><i class="fas mx-2 fa-check"></i>Region de l'adamaoua </span>
                                <span class="badge mx-2 bg-secondary">{{$nbres[0]->total}} <i class="fas fa-chart-line"></i></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_centre"><i class="fas mx-2 fa-check"></i>Region du Centre</span>
                                <span class="badge mx-2 bg-secondary">@if($nbres[1]->libelle == 'Centre') {{$nbres[1]->total}} @else 0 @endif</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_est"><i class="fas mx-2 fa-check"></i>Region du Est</span>
                                <span class="badge mx-2 bg-secondary">@if($nbres[1]->libelle == 'Est') {{$nbres[1]->total}} @else 0 @endif</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_extreme_nord"><i class="fas mx-2 fa-check"></i>Region du Extreme-Nord</span>
                                <span class="badge mx-2 bg-secondary">{{$nbres[1]->total}} <i class="fas fa-chart-line"></i></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_littoral"><i class="fas mx-2 fa-check"></i>Region du Littoral</span>
                                <span class="badge mx-2 bg-secondary">@if($nbres[1]->libelle == 'Littoral') {{$nbres[1]->total}} @else 0 @endif</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_nord"><i class="fas mx-2 fa-check"></i>Region du Nord </span>
                                <span class="badge mx-2 bg-secondary"> {{$nbres[2]->total}} <i class="fas fa-chart-line"></i></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_nord_ouest"><i class="fas mx-2 fa-check"></i>Region du Nord-Ouest </span>
                                <span class="badge mx-2 bg-secondary">@if($nbres[1]->libelle == 'Nord-Ouest') {{$nbres[1]->total}} @else 0 @endif</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_ouest"><i class="fas mx-2 fa-check"></i>Region du Ouest </span>
                                <span class="badge mx-2 bg-secondary">@if($nbres[1]->libelle == 'Ouest') {{$nbres[1]->total}} @else 0 @endif</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_sud">
                                    <i class="fas mx-2 fa-check"></i>Region du Sud
                                </span>
                                <span class="badge mx-2 bg-secondary">@if($nbres[1]->libelle == 'Sud') {{$nbres[1]->total}} @else 0 @endif</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_sud_ouest"><i class="fas mx-2 fa-check"></i>Region du Sud-Ouest </span>
                                <span class="badge mx-2 bg-secondary">@if($nbres[1]->libelle == 'Sud-Ouest') {{$nbres[1]->total}} @else 0 @endif</span>
                            </li>
                        </ul>
                        @else

                        <ul>
                            <li class="d-flex justify-content-between">
                                <span id="link_adamaoua"><i class="fas mx-2 fa-check"></i>Vide !!</span>
                            </li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<livewire:carte-etablissement />

@push('script-carte')

<script src="{{asset('datatable/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatable/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('datatable/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('datatable/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('datatable/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('datatable/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('datatable/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('datatable/datatables-init.js')}}"></script>
<script>
    (function($) {
        $('[id*=region_').on('click', function(e) {
            e.preventDefault();
            //On recupere l'ID de la region
            let region = $(this);
            let regionId = $(this)["0"].id;

            let regions = $('[id*=region_');
            let txt = regionId.replace('region_', '');
            let nom = txt.replace('_', ' ');

            regions.css('fill', '#fcfcfd');
            region.css('fill', '#deb857');

            let url = location.href; //Save down the URL without hash.
            location.href = "#list-ecoles"; //Go to the target element.
            history.replaceState(null, null, url);

            let libelle = " de la région " + txt;
            $('.text-ecole-region').html(libelle);

            let txt2 = txt.charAt(0).toUpperCase() + txt.slice(1);

            let table = $('#data-ecoles-visitor').DataTable();
            table.ajax.url('ecoles-visitor/?region=' + txt2).load()

            /*$.ajax({
                global: false,
                type: "GET",
                url: 'ecoles-visitor/?region=' + txt2,
                dataType: 'json',
                beforeSend: function() {
                    $('.accordion-body').addClass('loading');
                },
                success: function(data) {
                    alert('ok');
                },
                complete: function() {
                    $('.accordion-body').removeClass('loading');
                }
            });*/

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
    })(jQuery);
</script>
</body>
@endpush

@endsection
