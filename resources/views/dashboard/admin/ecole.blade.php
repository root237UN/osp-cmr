@extends('layouts.wrapper')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="p-3 d-flex justify-content-between">
                    <span>Ecole</span>
                    <p class="mb-0">
                        <span>Time</span>
                        <span class="alert m-0 p-2 alert-success">
                            <i class="fas fa-search"></i>
                        </span>
                    </p>
                </div>

                <div class="card my-2 mx-3 card-welcome">
                    <div class="card-body">
                        <div class="col-7">
                            <h4 class="welcome-text mt-2">Hello {{Auth::user()->name}} !</h4>
                            <p class="text-white welcome-text-description">Administrez et gérez les écoles d’enseignement secondaire technique et général du système !!!</p>
                        </div>
                        <div class="col-5"></div>
                    </div>
                    <div class="close-card">
                        <span class="fas fa-tag"></span>
                    </div>
                </div>

                <div class="px-3 py-2 d-flex justify-content-between">
                    <span>Actions</span>
                </div>
                <div class="flex-row">
                    <div class="box-actions  row mx-3">
                        <div class="btn-add btn-action d-flex justify-content-center" data-toggle="modal" data-target="#addEcole">
                            <i class="fas fa-plus-circle"></i>
                            <span>Ajouter</span>
                        </div>
                        <div class="btn-add btn-action d-flex justify-content-center">
                            <i class="fas fa-plus-circle"></i>
                            <span>Ajouter des ecoles</span>
                        </div>
                    </div>
                </div>

                <div class="px-3 py-2 d-flex justify-content-between">
                    <span>Listes des ecoles</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="addEcole" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deconnexion </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="form mb-0">
                <div class="modal-body text-center">
                    <h3>Confirmer la deconnexion !!! </h3>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-white btn-app-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-app text-white">

                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
