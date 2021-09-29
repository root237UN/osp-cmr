@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="">
        <nav class="nav-bar navbar navbar-expand-lg nav-top">
            <a class="col-md-1 title-nav"><span>Formation</span></a>
            <ul class="col-md-5 list-options navbar-nav">
                <li class="dropdown nav-bar-item">
                    <a><span>Type de formation</span></a>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <li class="dropdown nav-bar-item">
                    <a><span>Formation</span></a>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <li class="dropdown nav-bar-item">
                    <a><span>Structure de formation</span></a>
                    <i class="fas fa-chevron-down"></i>
                </li>
                <li class="dropdown nav-bar-item">
                    <a><span>Localites</span></a>
                    <i class="fas fa-chevron-down"></i>
                </li>
            </ul>
            <br>
        </nav>
    </div>
</div>

<div id="header-filiere">
    <div class="row">
        <div class="col-10">
            <div class="m-4">
                <h1 class="text-capitalize header-title">
                    <a href="#presentation-filiere" style="color: #deb857;">{{$formation->libelle}}</a>
                </h1>
            </div>
            <div class="m-4">
                <p class="header-title-description">@if($formation->description == NULL) @else{{$formation->description}} @endif</p>
            </div>
        </div>

        <div class="img-part d-flex justify-content-center col-2">
            <div class="img-decor">
                <img class="img img-filiere " src="../images/bg2.jpg">
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
                    <li class="breadcrumb-item"><a href="{{route('formation')}}">Formation</a></li>
                    <li class="breadcrumb-item"><a href="#">{{$formation->TypeFormation->libelle}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$formation->libelle}}</li>
                </ol>
            </nav>
            <button class="btn btn-xs btn-save m-0 col-md-2">
                <i class="fas fa-plus-square"></i>
                Enregistrer
            </button>
        </div>
    </div>

    <div class="container" id="presentation-filiere">
        <div class="d-flex justify-content-center">
            <div class="col-8 d-flex flex-column">
                <hr style="color: #deb857;">
                <div class="d-flex justify-content-center">
                    <h3 class="title-presentation my-3">Presentation detaillee de la formation </h3>
                </div>
            </div>
        </div>
        <div class="content-filiere">
            <div class="condition-access">
                <div class="row d-flex justify-content-between" style="align-items: center;">
                    <div class="col-7 d-flex justify-content-end">
                        <h6 class=" my-2  text-condition-access text-title-card">Conditons d'access generaux </h6>
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <button class="btn btn-app-2 btn-xs btn-save">
                            <i class="fas fa-eye"></i>
                            <span style="font-size: xx-small;">Consulter toute les condition</span>
                        </button>
                    </div>
                </div>
                @if($formation->Structure[0]->conditionAccess->count() > 1)
                <div class="row py-3 d-flex justify-content-center content-structure-formation">
                    <div class="item-condition-access d-flex justify-content-center col-4" style="margin-right: 13px;">
                        <div class="card col-12 card-condition-access">
                            <div class="card-body p-2 ">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="decor-img-condition mx-3 d-flex flex-row justify-content-center">
                                            <div style="background-color: white; border-radius: 100px;">
                                                <img class="img img-condition" height="40px" src="../images/bg2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <span style=" text-transform: uppercase;font-size: 13px;line-height: 10px;font-weight:bold;">Conditon 1</span>
                                        <p>{{$formation->Structure[0]->conditionAccess[0]->libelle}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider-line d-flex justify-content-center flex-column">
                        <span>ou</span>
                    </div>
                    <div class="item-condition-access d-flex justify-content-center col-4">
                        <div class="card col-12 card-condition-access">
                            <div class="card-body p-2 ">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="decor-img-condition mx-3 d-flex flex-row justify-content-center">
                                            <div style="background-color: white; border-radius: 100px;">
                                                <img class="img img-condition" height="40px" src="../images/bg2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <span style=" text-transform: uppercase;font-size: 13px;line-height: 10px;font-weight:bold;">Conditon 2</span>
                                        <p>{{$formation->Structure[0]->conditionAccess[1]->libelle}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                @endif
            </div>

            <div class="d-flex flex-column justify-content-center" style="align-items: center;opacity: .5;">
                <div class="bracket-group">
                </div>
                <div class="tiret"></div>
            </div>

            <div class="row d-flex justify-content-between" style="align-items: center;">
                <div class="col-7 d-flex justify-content-end">
                    <p class="m-0  text-condition-access  text-title-card">Ecole de formations </p>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <button class="btn btn-app-2  btn-xs btn-save">
                        <i class="fas fa-eye"></i>
                        <span style="font-size: xx-small;">Consulter toute les ecoles</span>
                    </button>
                </div>
            </div>

            <div class="row py-2 d-flex justify-content-center content-structure-formation">
                @forelse($structures as $structure)
                <div class="col-3">
                    <div class="item-structure-formation tooltip2 d-flex justify-content-center">
                        <div class="top">
                            <div class="text-content">
                                <h6>Description</h6>
                                <ul class="list-description-ecole">
                                    <?php
                                    $txt = "";
                                    if (count($structure->conditionAccess) > 0) {
                                        echo "<li>" . count($structure->conditionAccess) . " condition d'access</li>";
                                    } else {
                                        echo "<li>Aucune condition  !!!</li>";
                                    }
                                    ?>
                                    <li>{{$structure->duree}} de formations</li>
                                    <li>Taux d'employabilite : -//- </li>
                                    <li><a>Lien vers l'ecole</a></li>
                                    <li>Localites : <a></a></li>
                                </ul>
                            </div>
                            <div class="decor-box-img"><img src="../images/bg3.jpg" /></div>
                            <div class="decor-box"></div>
                            <i></i>
                        </div>
                        <div class="card col-12 card-structure-formation">

                            <div class="card-body d-flex flex-column justify-content-between p-2">
                                <a class="row" href="{{route('structure.formation', ['code' => $structure->code])}}">
                                    <div class="col-3">
                                        <div class="decor-img-condition mx-2 d-flex flex-row justify-content-center">
                                            <div style="background-color: white; border-radius: 100px;">
                                                <img class="img img-condition" height="40px" src="../images/bg2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <span style=" text-transform: uppercase;font-size: 13px;line-height: 10px;font-weight:bold;">{{$structure->code}}</span>
                                        <p class="m-0">{{$structure->libelle}} </p>
                                    </div>
                                </a>
                                <hr style="margin-top: 3px;margin-bottom: 3px;color: #243a5e; width: 90%; margin-left: 5%;margin-right: 5%; margin-right: 5%; color: #243a5e">
                                <div class="row px-2 d-flex justify-content-between">
                                    <p class="col-7">
                                        <?php
                                        $nbre = (int)$structure->notation;
                                        for ($i = 0; $i < $nbre; $i++) {
                                            echo "<i class='fas mx-1 fa-star' style='font-size: 8px;'></i>";
                                        }
                                        ?>
                                    </p>
                                    <p class="col-5">
                                        <a>
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>@if($structure->Localite->count() > 0) {{$structure->Localite[0]->libelle}} @else Vide !!! @endif</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-line d-flex justify-content-center flex-column">
                    <span>ou</span>
                </div>
                @empty
                @endforelse
            </div>

            <div class="d-flex flex-column justify-content-center" style="align-items: center;opacity: .5;">
                <div class="bracket-group">
                </div>
                <div class="tiret"></div>
            </div>

            <div class="row d-flex justify-content-between" style="align-items: center;">
                <div class="col-7 d-flex justify-content-end">
                    <p class="m-0  text-condition-access  text-title-card">Certificat de formation </p>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <button class="btn btn-app-2  btn-xs btn-save">
                        <i class="fas fa-eye"></i>
                        <span style="font-size: xx-small;">Consulter un exemplaire </span></button>
                </div>
            </div>

            <div class="row py-2 d-flex justify-content-center content-structure-formation">
                <div class="item-condition-access d-flex justify-content-center col-4">
                    <div class="card col-12 card-condition-access">
                        <div class="card-body p-2 ">
                            <div class="row">
                                <div class="col-3">
                                    <div class="decor-img-condition mx-3 d-flex flex-row justify-content-center">
                                        <div style="background-color: white; border-radius: 100px;">
                                            <img class="img img-condition" height="40px" src="../images/bg2.jpg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <span style=" text-transform: uppercase;font-size: 13px;line-height: 10px;font-weight:bold;">Certificat</span>
                                    <p class="text-uppercase">Certificat en {{$formation->libelle}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-center">
            <div class="col-8 d-flex flex-column">
                <hr style="color: #deb857;">
            </div>
        </div>
    </div>

</section>

@endsection
