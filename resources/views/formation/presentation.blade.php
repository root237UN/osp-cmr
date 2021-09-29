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
            <br />
        </nav>
    </div>
</div>

<div class="" id="header-formation">
    <div class="">
        <div class="row m-4">
            <h1 class="text-white text-capitalize header-title">Decouvrer les {{$type->libelle}} </h1>
        </div>
        <div class="row m-4">
            <p class="header-title-description">Apprennez d'avantage sur les formations et leurs debouches.</p>
        </div>
    </div>
</div>

<section id="formations">
<div class="container">
        <div class="d-flex my-2 mb-4 justify-content-between" style="align-items: center;">
            <nav class="col-md-10" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrum">
                <ol class="breadcrumb my-1">
                    <li class="breadcrumb-item breadcrumb-item-first"><a href="{{route('orientation')}}">Orientation</a></li>
                    <li class="breadcrumb-item"><a href="{{route('formation')}}">Formation</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('orientation')}}">{{$type->code}}</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2 py-2 " id="filtre">
                <p class="title-filtre d-flex justify-content-between">Filtre
                    <button class="btn btn-validate-filtre">
                        <i class="fas fa-check text-dark mr-2"></i>
                        Valide
                    </button>
                </p>
                <div class="content-filtre">
                    <form>
                        <div class="item-filtre my-2">
                            <h4 class="item-filtre-title">
                                <span>Localite</span>
                                <button class="btn text-dark btn-display" id="btn-display" type="button"> <i class="fas fa-chevron-down"></i></button>
                            </h4>
                            <input type="text" name="search-localite" class="form-control">
                            <div class="content-item content-item-1 my-2">
                                @forelse($localites as $localite)
                                <div class="form-check my-2">
                                    <input type="checkbox" class="form-check-input" value="{{$localite->libelle}}" id="localite-value" name="localite">
                                    <label class="form-check-label" for="localite-value">{{$localite->libelle}}</label>
                                </div>
                                @empty
                                <div class="form-check my-2">
                                    <input type="checkbox" class="form-check-input" value=""  id="localite-value" name="localite">
                                    <label class="form-check-label" for="localite-value">Vide !!!</label>
                                </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="item-filtre  my-2">
                            <h4 class="item-filtre-title">
                                <span>Structure</span>
                                <button class="btn text-dark btn-display" type="button"> <i class="fas fa-chevron-down"></i></button>
                            </h4>
                            <input type="text" name="search-parcours" class="form-control">
                            <div class="content-item my-2">
                                @forelse($structures as $structure)
                                <div class="form-check my-2">
                                    <input type="checkbox" class="form-check-input" value="{{$structure->libelle}}" id="structure-value" name="parcours">
                                    <label class="form-check-label" for="parcours-value">{{$structure->libelle}}</label>
                                </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-10" style="padding-left: 35px;">
                <div class="content">
                    <div class="content-header ">
                        <form class="form form-inline">
                            <div class="row-input">
                                <input class="form-control" placeholder="Rechercher ..." name="">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-search"></i><span class="mr-2">Rechercher</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="content-body">
                        <p class="result-count my-2">{{$type->Formations->count()}} resultats</p>
                        <div class="content-card row">
                            @forelse($formations as $formation)
                            <div class="card card-formation my-2 py-4">
                                <a href="{{route('formation.details', ['code' => $formation->id])}}">
                                    <div class="card-formation-header">
                                        <div class="card-formation-img">
                                            <img class="img -img-fluid" src="../images/bg3.jpg">
                                            <p class="description-formation">@if($formation->description == NULL)Description de la formation ... @else{{$formation->description}}@endif</p>
                                        </div>
                                        <h3 class="mt-2 libelle-formation">{{$formation->libelle}}</h3>
                                        <p class="diplome-formation">@if($formation->diplome){{$formation->diplome->libelle}} @else 2 Certificats associe !!! @endif</p>
                                    </div>
                                    <div class="card-formation-content">
                                        <button class="btn btn-xs my-1">@if($formation->Structure){{$formation->Structure->count()}} structures de formations @else Vide !!! @endif</button>
                                        <button class="btn btn-xs">
                                            <?php
                                            $c = 0;
                                            if ($formation->Structure) {
                                                foreach ($formation->Structure as $structure) {
                                                    if ($structure->Localite) {
                                                        $c += count($structure->Localite);
                                                    }
                                                }
                                                echo $c . " Localites";
                                            } else echo "Vide !!!";
                                            ?>
                                        </button>
                                        <button class="btn btn-xs">
                                            <?php
                                            $c = 0;
                                            if ($formation->Structure) {
                                                foreach ($formation->Structure as $structure) {
                                                    if ($structure->conditionAccess) {
                                                        $c += count($structure->conditionAccess);
                                                    }
                                                }
                                                echo $c . " Condition d'access ";
                                            } else echo "Vide !!!";
                                            ?>
                                        </button>
                                        <button class="btn btn-xs">
                                            <?php
                                                $duree = "";
                                                $i = 0;
                                                if ($formation->Structure) {
                                                    foreach ($formation->Structure as $structure) {
                                                        $duree = $structure->duree;
                                                    }
                                                    echo $duree ;
                                                } else echo "Vide !!!";
                                                ?>
                                        </button>
                                    </div>
                                </a>
                                <hr style="margin-bottom: 0px;">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-xs btn-save my-2">
                                        <i class="fas fa-plus-square"></i>
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                            @empty
                            <div class="card card-formation py-4">
                                <div class="card-formation-header">
                                    <h3 class="mt-2 libelle-formation">Aucune formation disponible !!</h3>
                                </div>
                                <div class="card-formation-content">
                                    <button class="btn btn-xs">Vide !!</button>
                                    <button class="btn btn-xs">Vide !!</button>
                                    <button class="btn btn-xs">Vide !! </button>
                                </div>
                                <hr>
                            </div>
                            @endforelse
                        </div>
                        <div class="pt-2 my-2">
                            {{$formations->onEachSide(10)->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
