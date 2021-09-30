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
                    <a href="#presentation-filiere" style="color: #fff;font-family: 'Gelasio', serif;">Structure d'aide et d'accompagnement</a>
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
                    <li class="breadcrumb-item">Structure</li>
                    <li class="breadcrumb-item active" aria-current="page">Structures d’aide à l’insertion professionnelle</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
@endsection
