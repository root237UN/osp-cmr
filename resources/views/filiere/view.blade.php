@extends('layouts.app')

@section('content')

<div class="menu-2 mx-4">
    <div class="row">
        <livewire:top-navbar-filiere />
    </div>
</div>

<div class="" id="header-formation">
    <div class="">
        <div class="row mx-4 pt-4">
            <h1 class="text-white text-capitalize header-title">Présentation des filières d’enseignement</h1>
        </div>
        <div class="row mx-4 py-4">
            <p class="header-title-description">
            Apprenez d'avantage sur les filières, les enseignements, les métiers ainsi que les diplômes offert par le parcours {{$section->libelle}} au @if($cycle->id ==1) prémier @else second @endif cycle
                de l' <span class="text-lowercase">{{$section->OptionEnseignement->TypeEnseignement->libelle}}</span>.</p>
        </div>
    </div>
</div>

<section id="filieres">
    <div class="container">
        <div class="d-flex my-2 mb-4 justify-content-between" style="align-items: center;">
            <nav class="col-md-10" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrum">
                <ol class="breadcrumb my-1">
                    <li class="breadcrumb-item breadcrumb-item-first"><a href="#">Orientation</a></li>
                    <li class="breadcrumb-item"><a href="{{route('enseignement.view', ['code' => $section->OptionEnseignement->TypeEnseignement->code ])}}">{{$section->OptionEnseignement->TypeEnseignement->libelle}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('parcours.show', ['code' => $section->OptionEnseignement->code ])}}">{{$section->OptionEnseignement->libelle}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('section',  ['code' => $section->id ])}}">{{$section->libelle}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$cycle->libelle}}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-2 py-2" id="filtre">
                <p class="title-filtre d-flex justify-content-between">Filtre </p>
                <div class="content-filtre">
                    <form>
                        <div class="item-filtre my-2">
                            <h4 class="item-filtre-title">
                                <span>Localité</span>
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
                                    <input type="checkbox" class="form-check-input" value="" id="localite-value" name="localite">
                                    <label class="form-check-label" for="localite-value">Vide !!!</label>
                                </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="item-filtre  my-2">
                            <h4 class="item-filtre-title">
                                <span>Secteur</span>
                                <button class="btn text-dark btn-display" type="button"> <i class="fas fa-chevron-down"></i></button>
                            </h4>

                            <input type="text" name="search-parcours" class="form-control">
                            <div class="content-item my-2">
                            @forelse($secteurs as $secteur)
                                <div class="form-check my-2">
                                    <input type="checkbox" class="form-check-input" id="{{$secteur->id}}" name="parcours">
                                    <label class="form-check-label" for="parcours-value">{{$secteur->libelle}}</label>
                                </div>
                            @empty
                            @endforelse
                            </div>
                        </div>
                        <div class="item-filtre  my-2">
                            <h4 class="item-filtre-title">
                                <span>Ecole</span>
                                <button class="btn text-dark btn-display" type="button"> <i class="fas fa-chevron-down"></i></button>
                            </h4>
                            <input type="text" name="search-ecole" class="form-control">
                            <div class="content-item my-2">
                            @forelse($ecoles as $ecole)
                                <div class="form-check my-2">
                                    <input type="checkbox" class="form-check-input" id="ecole-value" name="ecole">
                                    <label class="form-check-label" for="ecole-value">{{$ecole->libelle}}</label>
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
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-search"></i><span class="mr-2">Rechercher</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="content-body">
                        <p class="result-count my-2">{{$filieres->count()}} resultats</p>
                        <div class="content-card px-3 row">
                            @forelse($filieres as $filiere)
                            <div class="card card-formation my-2 py-4">
                                <a href="{{ route('showFiliere', ['code' => $filiere->id ]) }}">
                                    <div class="card-formation-header">
                                        <div class="card-formation-img">
                                            <img class="img -img-fluid" src="../images/bg3.jpg">
                                            <p class="description-formation">@if($filiere->description == NULL)Description de la filiere ... @else{{$filiere->description}}@endif</p>
                                        </div>
                                        <h3 class="mt-2 libelle-formation">{{$filiere->libelle}} ({{$filiere->code}})</h3>
                                        <p class="diplome-formation">@if($filiere->Diplome){{$filiere->Diplome->libelle}} @else Aucun diplome associe !!! @endif</p>
                                    </div>
                                    <div class="card-formation-content row">
                                        <button class="btn btn-xs my-1">@if($filiere->Enseignements){{$filiere->Enseignements->count()}} enseignements professionnelles @else Vide !!! @endif</button>
                                        <button class="btn btn-xs">@if($filiere->Competences){{$filiere->Competences->count()}} competences techniques @else Vide !!! @endif</button>
                                        <button class="btn btn-xs">@if($filiere->Metier){{$filiere->Metier->count()}} metiers ouverts @else Vide !!! @endif</button>
                                        <button class="btn btn-xs">@if($filiere->Debouches){{$filiere->Debouches->count()}} opportunites @else Vide !!! @endif</button>
                                    </div>
                                </a>
                                <hr style="margin-bottom: 0px;color: #243a5e;">
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
                                    <h3 class="mt-2 libelle-formation">Aucune filiere disponible !!</h3>
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
                            {{$filieres->onEachSide(10)->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
