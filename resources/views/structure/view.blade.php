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
        <livewire:top-navbar-structure />
    </div>
</div>

<div id="header-filiere">
    <div class="row">
        <div class="col-12">
            <div class="m-4">
                <h1 class="text-capitalize header-title">
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

<section id="content-filiere">
    <div class="container mt-2">
        <div class="row d-flex justify-content-between" style="align-items: center;">
            <nav class="col-md-10" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrum">
                <ol class="breadcrumb my-1">
                    <li class="breadcrumb-item breadcrumb-item-first">Orientation</li>
                    <li class="breadcrumb-item">Structure</li>
                    <li class="breadcrumb-item active" aria-current="page">Structures d’aide à l’insertion professionnelle</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-3 py-3 px-4">
                <div id="filtre-structure">
                    <h3>Filtre</h3>
                </div>
            </div>
            <div class="col-9 mt-3 mb-3">
                <div id="list-structure">
                    <livewire:search-structure-visitor />
                    <div class="row d-flex justify-content-between px-3">

                        <?php
                        $tab = json_decode($structures);

                        echo "<p class='result-count px-0 my-2'> " . count($tab) . " resultats</p>";
                        foreach ($tab as $structure ) {
                            echo "
                                <div class='card card-formation my-2 py-4'>
                                    <div class='card-formation-header'>
                                        <div class='card-formation-img'>
                                            <img class='img -img-fluid' src='../images/bg2.jpg'>
                                            <p class='description-formation'>";
                                            if($structure->objectif) echo $structure->objectif;
                                            else  echo "Aucun objectif défini pour le moment !!! </p>";
                                            echo "
                                        </div>
                                    </div>
                                    <div class='card-body px-0'>
                                        <p class='libelle-formation mb-0'>".$structure->libelle."</p>
                                    </div>
                                    <div class='card-footer bg-white d-flex justify-content-end'>
                                        <a class='btn btn-xs btn-save'>
                                            <i class='fas fa-plus-square'></i>
                                            Visiter
                                        </a>
                                    </div>
                                </div>
                                "
                            ;
                        };

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
