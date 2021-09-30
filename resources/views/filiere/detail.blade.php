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
</style>
<div class="container-fluid">
    <div class="">
        <livewire:top-navbar-filiere />
    </div>
</div>

<div id="header-filiere">
    <div class="row">
        <div class="col-10">
            <div class="m-4">
                <h1 class="text-capitalize header-title">
                    <a href="#presentation-filiere">{{$filiere->libelle}}</a>
                </h1>
            </div>
            <div class="m-4">
                <p class="header-title-description">@if($filiere->description == NULL) Decouvrer et explorer tout ce qui y'a a savoir sur {{$filiere->libelle}} @else{{$filiere->description}} @endif</p>
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
            <nav class="col-md-12" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrum">
                <ol class="breadcrumb my-1">
                    <li class="breadcrumb-item breadcrumb-item-first">Orientation</li>
                    <li class="breadcrumb-item">Enseignement</li>
                    <li class="breadcrumb-item">{{$filiere->sectionEnseignement->optionEnseignement->libelle}}</li>
                    <li class="breadcrumb-item">{{$filiere->sectionEnseignement->libelle}}</li>
                    <li class="breadcrumb-item">{{$filiere->cycleEnseignement->libelle}}</li>
                    <li class="breadcrumb-item active" aria-current="page">{{$filiere->libelle}}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container" id="presentation-filiere">
        <div class="d-flex justify-content-center">
            <div class="col-8 d-flex flex-column">
                <hr style="color: #deb857;">
                <div class="d-flex justify-content-center">
                    <p>Presentation detaillee de la filiere </p>
                </div>
            </div>
        </div>

        <div class="content-filiere">
            <div class="d-flex justify-content-center row">
                <div class="header-content-filiere px-2 d-flex flex-row col-6 justify-content-between">
                    <div class="col-2">
                        <div class="ml-2 mt-2 img-decor-1">
                            <img src="../images/bg2.jpg" class="img ">
                        </div>
                    </div>
                    <div class="d-flex col-10 mx-4 top-infos flex-column justify-content-between">
                        <div>
                            <h3>{{$filiere->libelle}}</h3>
                        </div>
                        <div>
                            <span>Condition d'access</span>
                            <p>@if(count($filiere->conditionAccess)>0) {{$filiere->conditionAccess[0]->libelle}} @else Aucune condition @endif</p>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <span>Diplome</span>
                                <p class="text-diplome">{{$filiere->cycleEnseignement->libelle}} / @if($filiere->diplome){{$filiere->diplome->libelle}} @else Aucune diplome !!! @endif</p>
                            </div>
                            <!--<div class="col-6">
                                <span>Notation</span>
                                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="body-content-filiere mb-4">
                    <div class="col-12">
                        <div class="top-content">
                            <nav>
                                <div class="nav nav-tabs mb-3 d-flex justify-content-between" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-enseignement-tab" data-bs-toggle="tab" data-bs-target="#nav-enseignement" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                        <i class="fas fa-graduation-cap"></i>
                                        Enseignement professionnels
                                    </button>
                                    <button class="nav-link" id="nav-debouche-tab" data-bs-toggle="tab" data-bs-target="#nav-debouche" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                        <i class="fas fa-tags mx-2"></i>
                                        Debouches
                                    </button>
                                    <button class="nav-link" id="nav-metier-tab" data-bs-toggle="tab" data-bs-target="#nav-metier" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                        <i class="fas fa-tags mx-2"></i>Metiers
                                    </button>
                                    <button class="nav-link" id="nav-ecole-tab" data-bs-toggle="tab" data-bs-target="#nav-ecole" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                        <i class="fas fa-school mx-2"></i>Ecoles
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-enseignement" role="tabpanel" aria-labelledby="nav-enseignement-tab">
                                <div class="container">
                                    <h4 class="title-content-1">@if($filiere->enseignements->count()) Modules d'enseignements professionnels : {{$filiere->enseignements->count()}} @else Aucun module d'enseignement pour le moment !!! @endif</h4>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-7">
                                            <div class="main-timeline5">
                                                <!--{{$i=0}}-->
                                                @forelse($filiere->enseignements as $enseignement)
                                                <div class="timeline">
                                                    <div class="timeline-icon"><span class="year">{{$i+=1}}</span></div>
                                                    <div class="timeline-content">
                                                        <h3 class="title">{{$enseignement->libelle}}</h3>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim.
                                                        </p>
                                                    </div>
                                                </div>
                                                @empty
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="tab-pane fade" id="nav-debouche" role="tabpanel" aria-labelledby="nav-debouche-tab">
                                <div class="container">
                                    <h4 class="title-content-1">@if($filiere->debouches->count()) Debouches : {{$filiere->debouches->count()}} @else Aucune debouchee pour le moment !!! @endif</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="main-timeline12">
                                                @forelse($filiere->debouches as $debouche)
                                                @if($debouche->id%2==0)

                                                <div class="col-md-2 col-sm-4 timeline">
                                                    <span class="timeline-icon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    <div class="border"></div>
                                                    <div class="timeline-content">
                                                        <h4 class="title">{{$debouche->libelle}}</h4>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-md-2 col-sm-4 timeline">
                                                    <div class="timeline-content">
                                                        <h4 class="title">{{$debouche->libelle}}</h4>
                                                    </div>
                                                    <div class="border"></div>
                                                    <span class="timeline-icon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                </div>
                                                @endif
                                                @empty
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-metier" role="tabpanel" aria-labelledby="nav-metier-tab">

                                <div class="container">
                                    <h4 class="title-content-1">@if($filiere->metiers->count()>0) Metiers : {{$filiere->metiers->count()}} @else Aucun metier pour le moment !!! @endif</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-ecole" role="tabpanel" aria-labelledby="nav-ecole-tab">
                                <div class="container">
                                    <h4>Ecoles offrant cette filiere d'enseignement</h4>
                                    <!--<div class="row">
                                        <div class="col-md-12">
                                            <div class="main-timeline2">
                                                <div class="timeline">
                                                    <span class="icon fa fa-globe"></span>
                                                    <a href="#" class="timeline-content">
                                                        <h3 class="title">Web Designer</h3>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="timeline">
                                                    <span class="icon fa fa-rocket"></span>
                                                    <a href="#" class="timeline-content">
                                                        <h3 class="title">Web Developer</h3>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="timeline">
                                                    <span class="icon fa fa-briefcase"></span>
                                                    <a href="#" class="timeline-content">
                                                        <h3 class="title">Web Designer</h3>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="timeline">
                                                    <span class="icon fa fa-mobile"></span>
                                                    <a href="#" class="timeline-content">
                                                        <h3 class="title">Web Developer</h3>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-8 my-3 d-flex flex-column">
                <hr style="color: #deb857;height: 2px;">
            </div>
        </div>
    </div>
</section>
@endsection
