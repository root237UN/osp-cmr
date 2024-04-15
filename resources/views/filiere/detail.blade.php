@extends('layouts.end')

@section('title')
    <title>OSP - Cameroun | Filière d'enseignement</title>
@endsection

@section('content')
    <style>
        .top-content button {
            font-family: 'Aleo', serif;
            text-transform: uppercase;
            font-weight: bold;
        }

        .title-content-1 {
            /* font-family: 'Mate SC', serif; */
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
                    <h1 class=" header-title">
                        <a href="#presentation-filiere">{{ $filiere->libelle }}</a>
                    </h1>
                </div>
                <div class="m-4">
                    <p class="header-title-description">
                        @if ($filiere->description == null)
                            Découvrez les opportunités, les métiers, les débouchées et les compétences destinées aux
                            apprenants en {{ $filiere->libelle }} @else{{ $filiere->description }}
                        @endif
                    </p>
                </div>
            </div>

            <div class="img-part d-flex justify-content-center col-2">
                <div class="img-decor">
                    <img class="img img-filiere " src="{{ asset('images/bg2.jpg') }}">
                </div>
            </div>
        </div>
    </div>

    <section id="content-filiere">

        <div class="container py-2">
            <div class="row d-flex justify-content-between" style="align-items: center;">
                <nav class="col-md-12" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrum">
                    <ol class="breadcrumb my-1">
                        <li class="breadcrumb-item breadcrumb-item-first"><a href="">Orientation</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('enseignement.view', ['code' => $filiere->SectionEnseignement->OptionEnseignement->TypeEnseignement->code]) }}">{{ $filiere->SectionEnseignement->OptionEnseignement->TypeEnseignement->libelle }}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('parcours.show', ['code' => $filiere->SectionEnseignement->OptionEnseignement->code]) }}">{{ $filiere->SectionEnseignement->OptionEnseignement->libelle }}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('section', ['code' => $filiere->SectionEnseignement->id]) }}">{{ $filiere->SectionEnseignement->libelle }}</a>
                        </li>
                        <li class="breadcrumb-item">{{ $filiere->CycleEnseignement->libelle }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $filiere->libelle }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container" id="presentation-filiere">
            <div class="d-flex justify-content-center">
                <div class="col-md-8 col-xs-12 d-flex flex-column">
                    <hr class="hr_divider">
                    <div class="d-flex align-items-center mb-2 justify-content-between">
                        <h5 class="mb-0">Présentation détaillée de la filière </h5>
                        <div>
                            @livewire('o-s-p-trace-parcours', ['filiere' => $filiere])
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-filiere">
                <div class="d-flex justify-content-center row">
                    <div class="header-content-filiere px-2 d-flex flex-row col-md-6 col-xs-12 justify-content-between">
                        <div class="col-2">
                            <div class="ml-2 mt-2 img-decor-1">
                                <img src="{{ asset('images/bg2.jpg') }}" class="img ">
                            </div>
                        </div>
                        <div class="d-flex col-md-10 col-xs-12 ms-2 py-2 top-infos flex-column justify-content-between">
                            <div>
                                <h3 style="font-size: 23px;">{{ $filiere->libelle }}</h3>
                            </div>
                            <div>
                                <span>Condition d'access</span>
                                <p>
                                    @if (count($filiere->ConditionAccess) > 0)
                                        {{ $filiere->ConditionAccess[0]->libelle }}
                                    @else
                                        Aucune condition
                                    @endif
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-xs-12">
                                    <span>Diplome</span>
                                    <p class="text-diplome">{{ $filiere->CycleEnseignement->libelle }} / @if ($filiere->Diplome)
                                            {{ $filiere->Diplome->libelle }}
                                        @else
                                            Aucune diplome !!!
                                        @endif
                                    </p>
                                </div>
                                <!--<div class="col-6">
                                                            <span>Notation</span>
                                                            <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                        </div>-->
                            </div>
                        </div>
                    </div>
                    {{-- <div class="body-content-filiere mb-4">
                        <div class="col-12">
                            <div class="top-content">
                                <nav>
                                    <div class="nav nav-tabs mb-3 d-flex justify-content-between" id="nav-tab"
                                        role="tablist">
                                        <button class="nav-link active" id="nav-enseignement-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-enseignement" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true">
                                            <i class="fas fa-graduation-cap"></i>
                                            Enseignement professionnels
                                        </button>
                                        <button class="nav-link" id="nav-debouche-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-debouche" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">
                                            <i class="fas fa-tags mx-2"></i>
                                            Débouches
                                        </button>
                                        <button class="nav-link" id="nav-metier-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-metier" type="button" role="tab"
                                            aria-controls="nav-contact" aria-selected="false">
                                            <i class="fas fa-tags mx-2"></i>
                                            Metiers
                                        </button>
                                        <button class="nav-link" id="nav-ecole-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-ecole" type="button" role="tab"
                                            aria-controls="nav-contact" aria-selected="false">
                                            <i class="fas fa-school mx-2"></i>
                                            Etablissements
                                        </button>
                                    </div>
                                </nav>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-enseignement" role="tabpanel"
                                    aria-labelledby="nav-enseignement-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            Pour en savoir plus sur les differents modules d'enseignement.
                                            <button class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
                                    </div>
                                    <hr>
                                </div>

                                <div class="tab-pane fade" id="nav-debouche" role="tabpanel"
                                    aria-labelledby="nav-debouche-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            Pour en savoir plus sur les differents debouchées .
                                            <button class="btn btn-xs btn-save m-0">
                                                <i class="fas fa-eye"></i>
                                                En savoir plus
                                            </button>
                                        </h4>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-metier" role="tabpanel"
                                    aria-labelledby="nav-metier-tab">

                                    <div class="container">
                                        <h4 class="title-content-1">
                                            Pour en savoir plus sur les differents metiers .
                                            <button class="btn btn-xs btn-save m-0">
                                                <i class="fas fa-eye"></i>
                                                En savoir plus
                                            </button>
                                        </h4>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-ecole" role="tabpanel"
                                    aria-labelledby="nav-ecole-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            Pour en savoir plus sur les differents ecoles .
                                            <button class="btn btn-xs btn-save m-0">
                                                <i class="fas fa-eye"></i>
                                                En savoir plus
                                            </button>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="header-content-filiere px-2 d-flex flex-row row col-md-6 col-xs-12 justify-content-between">
                        <div class="nav nav-tabs mb-3 d-flex col-md-12 col-xs-12 justify-content-between" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-enseignement-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-enseignement" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                <i class="fas fa-graduation-cap"></i>
                                Enseignement professionnels
                            </button>
                            <button class="nav-link" id="nav-debouche-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-debouche" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                <i class="fas fa-tags mx-2"></i>
                                Débouches
                            </button>
                            <button class="nav-link" id="nav-metier-tab" data-bs-toggle="tab" data-bs-target="#nav-metier"
                                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                <i class="fas fa-tags mx-2"></i>
                                Metiers
                            </button>
                            <button class="nav-link" id="nav-ecole-tab" data-bs-toggle="tab" data-bs-target="#nav-ecole"
                                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                <i class="fas fa-school mx-2"></i>
                                Etablissements
                            </button>
                        </div>

                        <div class="col-md-12 col-xs-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-enseignement" role="tabpanel"
                                    aria-labelledby="nav-enseignement-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            <button class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
                                    </div>
                                    <hr>
                                </div>

                                <div class="tab-pane fade" id="nav-debouche" role="tabpanel"
                                    aria-labelledby="nav-debouche-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            <button class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
                                    </div>
                                    <hr>
                                </div>

                                <div class="tab-pane fade" id="nav-metier" role="tabpanel"
                                    aria-labelledby="nav-metier-tab">

                                    <div class="container">
                                        <h4 class="title-content-1">
                                            <button class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
                                    </div>
                                    <hr>
                                </div>

                                <div class="tab-pane fade" id="nav-ecole" role="tabpanel"
                                    aria-labelledby="nav-ecole-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            <button class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
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
                    <hr class="hr_divider">
                </div>
            </div>
        </div>

        {{-- Modal --}}
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
    </section>
@endsection
