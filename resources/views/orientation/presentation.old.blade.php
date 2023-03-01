@extends('layouts.page')

@section('title')
    <title>Orientaion | OSP - Cameroun</title>
    <style>
        .box-search-item {
            display: flex;
            padding-top: 10px;
            padding-bottom: 5px;
            padding-left: 5px;
            background-color: #38c172;
            box-shadow: -6px 3px 3px -2px rgba(0, 0, 0, 0.1);
            font-size: 20px;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding-right: 20px;
            padding-left: 20px;
            cursor: pointer;
            color: #fff;
            height: 45px;
        }

        .box-search-item label {
            display: flex;
            font-size: 60%;
        }

        .box-search-item i {
            display: flex;
        }

        .form-search {
            position: relative;
            padding: 0 !important;
            margin: 0;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .search-input {
            background-color: #f3f4f7;
            font-size: 15px;
            height: 45px;
            width: 100%;
            opacity: .8;
            display: flex;
            border: none;
            padding-left: 20px;
            padding-right: 20px;
        }

        .search-input:focus-visible {
            border: none;
            box-shadow: none;
            outline: none;
        }


        .search-input-wrapper {
            position: relative;
            font-weight: 400;
            display: flex;
            flex: 1;
            border-right: 2px solid #c4c6ca;
            align-items: center;
            padding-right: 20px;
        }

        .icon-search {
            width: 40px;
            height: auto;
            padding-left: 10px;
            font-size: 20px;
            color: rgba(0, 0, 0, .8);
            display: flex;
        }

        .btn-box-search {
            background: #38c172 !important;
            width: 90px;
            font-size: 12px !important;
            letter-spacing: .5px;
            color: #fff !important;
        }

        header.bg-cover::before {
            content: none;
        }

        .box-search {
            background-color: #f3f4f7;
        }

        .box-search-input {
            padding: 0 !important;
            margin: 0 !important;
        }

        .box-search-term {
            padding: 0 !important;
            margin: 0 !important;
        }

        .hidden-btn {
            display: none;
            visibility: hidden;
        }

        .border-box {
            border: 1px solid #38c172;
        }

        .menu-inner-categorie {
            border-left: 1px solid #c4c6ca;
            border-top: 1px solid #c4c6ca;
            min-height: 300px;
            position: relative;
            top: 0;
            bottom: 0;
        }

        .menu-item {
            height: 130px;
            border: 1px solid #c4c6ca;
            margin: 0 !important;
            transition: all cubic-bezier(0.075, 0.82, 0.165, 1) 350ms;
        }

        .menu-item:hover {
            background-color: #38c172;
            color: #fff !important;
            border: 1px solid #fff;
        }

        .menu-item.active {
            background-color: #38c172;
            border: 1px solid #fff;
        }

        .menu-item.active * {
            color: #fff !important;
        }

        .menu-item:last-child {
            background-color: #262d3d !important;
            color: #fff !important;
        }

        .menu-item:last-child p {
            color: #fff !important;
        }

        .menu-item-card {
            display: flex;
            height: 100%;
        }

        .menu-item-card>a {
            padding: 25px;
            box-shadow: none;
            color: #455065;
            display: flex;
            flex: 1;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu-item-title {
            font-size: 20px;
            line-height: 35px;
            margin: 0;
        }

        .menu-overlay {
            background: #262d3d;
            bottom: 0;
            left: 0;
            opacity: .5;
            position: fixed;
            right: 0;
            top: 0;
            -webkit-transition: opacity .2s;
            transition: opacity .2s;
            z-index: 10;
        }

        .is-opened {
            position: relative;
            z-index: 30;
        }

        .menu-inner-categorie {
            border-left: 1px solid #c4c6ca;
            border-top: 1px solid #c4c6ca;
            background-color: #f3f4f7;
            position: absolute;
            top: 100%;
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
            -webkit-transition: visibility .2s, -webkit-transform .2s;
            transition: visibility .2s, -webkit-transform .2s;
            transition: transform .2s, visibility .2s;
            transition: transform .2s, visibility .2s, -webkit-transform .2s;
            visibility: hidden;
            display: none !important;
            width: 100%;
            z-index: 10;
        }

        .box-search.is-opened .menu-inner-categorie {
            transform: translateY(0);
            visibility: visible;
            display: flex !important;
        }

        #top-content-1 {
            margin-top: 80px;
            width: 98% !important;
            border-radius: 7px;

        }

        header.bg-cover::before {
            background: linear-gradient(45deg, #000000c7, #fcfdfd);
        }

        .menu-item.is-content-menu {
            position: relative;
        }

        .menu-item.is-content-menu:hover .menu-content {
            top: 0;
            display: block;
            width: 100%;
            height: 300px;
        }

        .menu-content {
            width: 100%;
            height: 100%;
            background-color: #262d3d;
            position: absolute;
            top: -100%;
            display: none;
            left: 0;
            right: 0;
            /* max-height: 130px; */
            overflow-y: scroll;
        }

        .menu-content ul {
            columns: 2;
        }

        .menu-content ul li {
            background-color: transparent;
            color: #fff;
            border-color: #f3f4f73d;
            cursor: pointer;
            font-size: 13px;
            transition: all cubic-bezier(0.075, 0.82, 0.165, 1) 350ms;
        }

        .menu-content ul li:hover {
            background-color: #f3f4f7;
            color: #262d3d;
        }

    </style>
@endsection


@section('content-header')
    <div class='container-fluid box-search' id='top-content-1' data-aos="fade-down">
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


    </div>
@endsection

@push('scripts')
    <script>
        window.addEventListener("load", function(event) {

            // Animation sur la barre de recherche
            let input = document.querySelector('#search-input');
            let btnBox = document.querySelector('.btn-box-search');
            let formInput = document.querySelector('.form-search');
            let boxItem = document.querySelector('.box-search-term');

            try {
                input.addEventListener('focus', () => {
                    if (btnBox.classList.contains('hidden-btn')) btnBox.classList.remove('hidden-btn');
                    formInput.classList.add('border-box');
                    boxItem.classList.add('border-box');
                });
                input.addEventListener('blur', () => {
                    if (input.value.length < 1) {
                        if (!btnBox.classList.contains('hidden-btn')) btnBox.classList.add('hidden-btn');

                        formInput.classList.remove('border-box');
                        boxItem.classList.remove('border-box');
                    }
                });
            } catch (error) {
                console.log(error);
            }

            try {
                boxItem.addEventListener('click', displayOption);
            } catch (error) {
                console.log(error);
            }

            function displayOption() {
                let overlay = document.createElement('div');
                overlay.classList.add('menu-overlay');

                if (!document.querySelector('.box-search').classList.contains('is-opened')) {
                    document.querySelector('.box-search').classList.add('is-opened');
                    document.body.appendChild(overlay);
                } else {
                    document.querySelector('.box-search').classList.remove('is-opened');
                    document.body.removeChild(document.querySelector('.menu-overlay'));
                }

            }

            let globalTermSearch = document.querySelectorAll('.menu-item');
            let termSearch = document.querySelector('.global-term-search');

            let inputGlobalTerm = document.getElementsByName('global-term');
            console.log(inputGlobalTerm);

            globalTermSearch.forEach(element => {
                element.addEventListener('click', (e) => {
                    if (!element.classList.contains('active')) {
                        element.classList.add('active');
                        termSearch.innerText = element.querySelector('.menu-item-title').innerText;
                    } else element.classList.remove('active');
                });
            });
        })
    </script>
@endpush
