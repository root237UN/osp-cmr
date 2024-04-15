@extends('layouts.app')

@section('title')
    <title>OSP - Cameroun | Filière d'enseignement</title>
@endsection

@section('content')

<div class="menu-2 mx-4" style="margin-top: 50px;padding-top:30px">
    <div class="row">
        @livewire('top-navbar-filiere')
    </div>
</div>

<div class="" id="header-formation">
    <div class="">
        <div class="row mx-4 pt-4">
            <h1 class="text-white title-2 header-title ">Présentation des filières d’enseignement du parcours académique {{$section->libelle}}</h1>
        </div>
        <div class="row mx-4 py-4">
            <p class="header-title-description site-text">
                Apprenez d'avantage sur les filières, les enseignements, les métiers ainsi que les diplômes offert par le parcours {{$section->libelle}} au @if($cycle->id ==1) prémier @else second @endif cycle
                de l' <span class="text-lowercase">{{$section->OptionEnseignement->TypeEnseignement->libelle}}</span>.</p>
        </div>
    </div>
</div>

<section id="filieres">
    <div class="container">
        <div class="d-flex my-2 site-text mb-4 justify-content-between" style="align-items: center;">
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

    <div class="container p-0">

        @livewire('filter-filiere',['id_cycle'=>$id_cycle,'id_section'=>$id_section])
    </div>
</section>

<!-- Display filter -->
<style>
    .list-localite {
        transition: all ease-in 450ms;
    }

    .hidden {
        display: none;
    }
</style>
<script>
    // Button
    let btnDisplayLocalite = document.querySelector('#btn-display-localite');
    let btnDisplaySecteur = document.querySelector('#btn-display-secteur');
    let btnDisplayEcole = document.querySelector('#btn-display-ecole');

    // Listes
    let listLocalite = document.querySelector('.list-localite');
    let listSecteur = document.querySelector('.list-secteur');
    let listEcole = document.querySelector('.liste-ecole');

    // Affichage de la liste des localites
    btnDisplayLocalite.addEventListener('click', () => {
        if (listLocalite.classList.contains('hidden')) {
            listLocalite.classList.remove('hidden');
        } else listLocalite.classList.add('hidden');
    })

    // Affichage de la liste des secteurs
    btnDisplaySecteur.addEventListener('click', () => {
        if (listSecteur.classList.contains('hidden')) {
            listSecteur.classList.remove('hidden');
        } else listSecteur.classList.add('hidden');
    })

    // Affichage de la liste des secteurs
    btnDisplayEcole.addEventListener('click', () => {
        if (listEcole.classList.contains('hidden')) {
            listEcole.classList.remove('hidden');
        } else listEcole.classList.add('hidden');
    })
</script>

@endsection
