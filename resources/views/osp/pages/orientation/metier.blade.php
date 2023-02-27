@extends('layouts.orientation')

@section('title')
    <title>OSP - Cameroun  | Metier</title>
@endsection


@section('content-header')
    {{-- <div class='container-fluid box-search' id='top-content-1' data-aos="fade-down">
        <div class='ps-5 pe-5'>
            <div class="menu-search row">
                <div class='col-md-2 box-search-term'>
                    <div class='box-search-item'>
                        <label class="global-term-search">
                            Enseignement secondaire
                        </label>
                        <span class="material-icons-outlined icon-term">expand_more</span>
                    </div>
                </div>

                <div class='box-search-input col-md-10'>
                    <form class='form-search' method="GET" action="{{ url('search') }}">
                        @csrf
                        <div class='icon-search'>
                            <span class="material-icons-outlined"> search </span>
                        </div>
                        <div class='search-input-wrapper'>
                            <input type="text" class='search-input' name='term' id='search-input'
                                placeholder="Besoin d'une orientation ? " />
                            <input type="hidden" name='global' value='job' />
                            <input type="submit" class='btn btn-xs btn-box-search hidden-btn' value='Rechercher' />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class='menu-inner menu-inner-categorie ps-5 pe-5 row'>
            <div class="col-md-4 menu-item">
                <div class='menu-item-card'>
                    <a class="card-inner">
                        <div class='menu-item-icon'><span class="material-icons-outlined">work_outline </span></div>
                        <p class='menu-item-title'>Metiers</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 menu-item is-content-menu">
                <div class='menu-item-card'>
                    <a class="card-inner">
                        <div class='menu-item-icon'><span class="material-icons-outlined">work_outline </span></div>
                        <p class='menu-item-title'>Formations professionnelle</p>
                    </a>
                </div>
                <div class="menu-content">
                    <ul class="list-group list-group-flush">
                        @forelse($formations as $formation)
                            <li class="title-2 list-group-item">
                                <a class=""
                                    href="{{ route('formation.details', ['code' => $formation->libelle]) }}">
                                    {{ $formation->libelle }}
                                </a>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="col-md-4 menu-item">
                <div class='menu-item-card'>
                    <a class="card-inner">
                        <div class='menu-item-icon'><span class="material-icons-outlined">work_outline </span></div>
                        <p class='menu-item-title'>Emplois</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 menu-item">
                <div class='menu-item-card'>
                    <a class="card-inner">
                        <div class='menu-item-icon'><span class="material-icons-outlined">work_outline </span></div>
                        <p class='menu-item-title'>Etablissements</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 menu-item">
                <div class='menu-item-card'>
                    <a class="card-inner">
                        <div class='menu-item-icon'><span class="material-icons-outlined">work_outline </span></div>
                        <p class='menu-item-title'>Programmes gouvernementaux d'aide</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 menu-item">
                <div class='menu-item-card'>
                    <a class="card-inner">
                        <div class='menu-item-icon'><span class="material-icons-outlined">work_outline </span></div>
                        <p class='menu-item-title'>Job description</p>
                    </a>
                </div>
            </div>
        </div>


    </div> --}}
    <h1>Metier </h1>
@endsection
