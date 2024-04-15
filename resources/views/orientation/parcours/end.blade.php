@extends('layouts.end')

@section('title')
    <title>OSP - Cameroun | Filière d'enseignement</title>
@endsection

@section('content')
    <div class="menu-2 px-4" style="padding-top:20px">
        <div class="row">
            @livewire('top-navbar-filiere')
        </div>
    </div>

    <div class="" id="header-formation">
        <div class="">
            <div class="row mx-4 pt-4">
                <h1 class="text-white title-2 header-title ">Présentation des filières d’enseignement du parcours
                    {{ $section->libelle }}</h1>
            </div>
            <div class="row mx-4 py-4">
                <p class="header-title-description site-text">
                    Apprenez d'avantage sur les filières, les enseignements, les métiers ainsi que les diplômes offert par
                    le parcours {{ $section->libelle }} au @if ($cycle->id == 1)
                        prémier
                    @else
                        second
                    @endif cycle
                    de l' <span class="text-lowercase">{{ $section->OptionEnseignement->TypeEnseignement->libelle }}</span>.
                </p>
            </div>
        </div>
    </div>


    <section id="filieres">
        <div class="container">
            <div class="d-flex my-2 site-text mb-4 justify-content-between" style="align-items: center;">
                <nav class="col-md-10" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrum">
                    <ol class="breadcrumb my-1">
                        <li class="breadcrumb-item breadcrumb-item-first"><a href="#">Orientation</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('enseignement.view', ['code' => $section->OptionEnseignement->TypeEnseignement->code]) }}">{{ $section->OptionEnseignement->TypeEnseignement->libelle }}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('parcours.show', ['code' => $section->OptionEnseignement->code]) }}">{{ $section->OptionEnseignement->libelle }}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('section', ['code' => $section->id]) }}">{{ $section->libelle }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $cycle->libelle }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container p-0">

            @livewire('filter-filiere', ['id_cycle' => $id_cycle, 'id_section' => $id_section])
        </div>

    </section>
@endsection
