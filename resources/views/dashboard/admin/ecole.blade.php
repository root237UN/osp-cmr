@extends('layouts.wrapper')

@section('css')
<style>
    .card-action {
        border: none;
    }

    .form-control:focus,
    .form-control:active {
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px !important;
    }

    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        font-size: 12px !important;
    }
    .form label{
        display: block;
        margin-bottom: 5px;
    }
    .select-cycle *{
        font-size: 12px !important;
    }
    .filiere-cycle1,.filiere-cycle2{
        display: none;
        transform: scale(0);
        transition: all ease-in 350ms;
    }
    .filiere-cycle1.visible,.filiere-cycle2.visible{
        display: block;
        transform: scale(1);
    }
</style>
@endsection

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="p-3 pb-0 d-flex justify-content-between">
                    <span class="text-menu text-uppercase">Ecole</span>
                    <p class="mb-0 ">
                        <span class="text-day">{{$date->toFormattedDateString()}}</span>
                        <span class="alert m-0 p-2 ps-3 pe-3 btn-search alert-app">
                            <i class="fas fa-search"></i>
                        </span>
                    </p>
                </div>

                <!-- <div class="card my-2 mx-3 card-welcome">
                    <div class="card-body">
                        <div class="col-7">
                            <h4 class="welcome-text mt-2">Hello {{Auth::user()->name}} !</h4>
                            <p class="text-white welcome-text-description">Administrez et gérez les écoles d’enseignement secondaire technique et général ainsi que les localités du système !!!</p>
                        </div>
                        <div class="col-5"></div>
                    </div>
                    <div class="close-card">
                        <span class="fas fa-times-circle"></span>
                    </div>
                </div> -->

                <div class="px-3 pb-2 pe-3 d-flex justify-content-between">
                    <p class="mb-0 mt-2"><span class="text-menu">Actions</span></p>
                    <div class="flex-row d-flex justify-content-center">
                        <button class="btn btn-carousel" type="button" data-bs-target="#carouselEcole" data-bs-slide="prev">
                            <i class="fas fa-chevron-left mx-2"></i>
                        </button>
                        <button class="btn btn-carousel" type="button" data-bs-target="#carouselEcole" data-bs-slide="next">
                            <i class="fas fa-chevron-right mx-2"></i>
                        </button>
                    </div>
                </div>

                <div id="carouselEcole" class="carousel slide " data-bs-interval="10000000" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="px-3 py-0 col-12">
                                <livewire:ecoles />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="px-3 py-0 col-12">
                                <livewire:localites />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="px-3 py-0 col-12">
                                <livewire:ecole-specialite />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

