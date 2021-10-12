@extends('layouts.app')

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
@endsection

@section('content')
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
                                <span class="badge mx-2 bg-secondary">{{$nbres[0]->total}}</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span id="link_extreme_nord"><i class="fas mx-2 fa-check"></i>Region du Extreme-Nord</span>
                                <span class="badge mx-2 bg-secondary">{{$nbres[1]->total}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="mx-3">
    <h1>Etablissements</h1>
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Ecoles
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">

                <div class="table-responsive">
                    <table id="data-ecoles-visitor" class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nom Ecole</th>
                                <th>Type Enseignement</th>
                                <th>Localité</th>
                                <th>Cycle 1</th>
                                <th>Cycle 2</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ecoles as $ecole)
                            <tr>
                                <td>~</td>
                                <td>{{$ecole->libelle}}</td>
                                <td>-//-</td>
                                <td>{{$ecole->Localite->libelle}}</td>
                                <td class="text-center">@if($ecole->cycle_1 == 1) <i class="fas text-app fa-check"><i> @else @endif</td>
                                <td class="text-center">@if($ecole->cycle_2 == 1) <i class="fas text-app fa-check"><i> @else @endif</td>

                                <td class="flex-row d-flex jsutify-content-center px-2">
                                    <button class="btn btn-table-action p-2 flex-row d-flex justify-content-center btn-xs btn-action-edit">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            <!--<div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>-->
        </div>

    </div>
</section>

@push('script-carte')
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

<script src="{{asset('datatable/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('datatable/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('datatable/datatables-init.js')}}"></script>
</body>
@endpush

@endsection
