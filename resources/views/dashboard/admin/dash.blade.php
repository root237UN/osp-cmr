@extends('layouts.wrapper')

@section('css')
<style>
    .list-indicator {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .list-indicator li {
        margin-bottom: 10px;
        align-items: center;
    }
    .list-indicator li a {
        text-decoration: none;
        color: #243a5e ;
        align-items: center;
    }

    .line {
        width: 150px;
        height: 3px;
        border-radius: 10px;
        background-color: #fff;
    }

    .line-1 {
        background-color: #243a5e !important;
    }

    .line-2 {
        background-color: #deb857 !important;
    }
    .line-3{
        background-color: #8eecb6 !important;
    }

    .card-indicator {
        border: none;
        border-radius: 10px 0 10px 0px;
    }
    .card-indicator .card-header *{
        color: #243a5e;
    font-size: 13px;
    font-weight: bold;
}
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="p-3  d-flex justify-content-between">
                    <span class="text-menu">Dashboard</span>
                    <p class="mb-0">
                        <span class="text-day">{{$date->toFormattedDateString()}}</span>
                        <span class="alert  m-0 p-2 ps-3 pe-3 btn-search alert-app">
                            <i class="fas fa-search"></i>
                        </span>
                    </p>
                </div>

                <div class="card my-2 mx-3 card-welcome">
                    <div class="card-body row">
                        <div class="col-7">
                            <h4 class="welcome-text mt-2">Bon retour administrateur {{Auth::user()->name}} !</h4>
                            <p class="text-white welcome-text-description">Ici tu as les informations globales du système et le rapport d’activités des utilisateurs. Tu administres et gères tout le système comme tu veux !!!</p>
                        </div>
                        <div class="col-5 d-flex justify-content-center">
                            <div class="img-decor-working"></div>
                            <img class="img img-fluid" style="    width: 250px;height: 140px;" src="../images/user-working.png" />
                        </div>
                    </div>
                </div>

                <div class="px-3">
                    <div class="card card-indicator col-5 my-4">
                        <div class="card-header pb-2 flex-row d-flex justify-content-between">
                            <p class="mb-0">Derniers résultats </p>
                            <div><span>Voir plus</span></div>
                        </div>
                        <div class="card-body">
                            <ul class="list-indicator">
                                <li class="flex-row d-flex justify-content-between">
                                    <div>
                                        <i class="fas fa-school me-2"></i>
                                        <span>Ecoles</span>
                                    </div>
                                    <div class="line line-1"></div>
                                    <div> <span class="indicateur me-2">{{$results[0]}}</span><i class="fas fa-chart-line"></i></div>
                                </li>
                                <li class="flex-row d-flex justify-content-between">
                                    <div>
                                        <i class="fas me-2 fa-map-marker-alt"></i>
                                        <span>Localites</span>
                                    </div>
                                    <div class="line line-2"></div>
                                    <div>
                                        <span class="indicateur me-2">4</span><i class="fas fa-chart-line"></i>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="flex-row d-flex justify-content-between">
                                        <div>
                                            <i class="fas fa-users me-2"></i>
                                            <span>Users</span>
                                        </div>
                                        <div class="line line-3"></div>
                                        <div>
                                            <span class="indicateur"> 5 </span><i class="fas fa-chart-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
