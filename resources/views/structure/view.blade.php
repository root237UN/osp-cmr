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
    #list-structure{
    border: 1px solid red;
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
    <div class="container">
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
        <div class="col-3">
            <div id="filtre-structure">
                <p>Filtre</p>
            </div>
        </div>
        <div class="col-9">
            <div id="list-structure">
                <livewire:search-structure-visitor />
                <div>

                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
