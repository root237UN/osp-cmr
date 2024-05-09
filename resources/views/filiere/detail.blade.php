@extends('layouts.end')

@section('title')
    <title>OSP - Cameroun | Filière d'enseignement</title>
@endsection

@section('content')
    <style>
        .top-content button {
            font-family: 'Aleo', serif;
            text-transform: uppercase;
            font-weight: bold;
        }

        .title-content-1 {
            /* font-family: 'Mate SC', serif; */
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }

        .container {
            margin: 30px auto;
        }

        .container .card {
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            background: #fff;
            border-radius: 0px;
        }

        body {
            background: #eee
        }



        .btn.btn-primary {
            background-color: #ddd;
            color: black;
            box-shadow: none;
            border: none;
            font-size: 20px;
            width: 100%;
            height: 100%;
        }

        .btn.btn-primary:focus {
            box-shadow: none;
        }

        .container .card .img-box {
            width: 80px;
            height: 50px;
        }

        .container .card img {
            width: 100%;
            object-fit: fill;
        }

        .container .card .number {
            font-size: 24px;
        }

        .container .card-body .btn.btn-primary .fab.fa-cc-paypal {
            font-size: 32px;
            color: #3333f7;
        }

        .fab.fa-cc-amex {
            color: #1c6acf;
            font-size: 32px;
        }

        .fab.fa-cc-mastercard {
            font-size: 32px;
            color: red;
        }

        .fab.fa-cc-discover {
            font-size: 32px;
            color: orange;
        }

        .c-green {
            color: green;
        }

        .box {
            height: 40px;
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ddd;
        }

        .btn.btn-primary.payment {
            background-color: #1c6acf;
            color: white;
            border-radius: 0px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 24px;
        }


        .form__div {
            height: 50px;
            position: relative;
            margin-bottom: 10px;
        }

        .form-control {
            width: 100%;
            height: 45px;
            font-size: 14px;
            border: 1px solid #DADCE0;
            border-radius: 0;
            outline: none;
            padding: 2px;
            background: none;
            z-index: 1;
            box-shadow: none;
        }

        .form__label {
            position: absolute;
            left: 16px;
            top: 10px;
            background-color: #fff;
            color: #80868B;
            font-size: 16px;
            transition: .3s;
            text-transform: uppercase;
        }

        .form-control:focus+.form__label {
            top: -8px;
            left: 12px;
            color: #1A73E8;
            font-size: 12px;
            font-weight: 500;
            z-index: 10;
        }

        .form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
            top: -8px;
            left: 12px;
            font-size: 12px;
            font-weight: 500;
            z-index: 10;
        }

        .form-control:focus {
            border: 1.5px solid #1A73E8;
            box-shadow: none;
        }
    </style>
    <div class="container-fluid">
        <div class="">
            <livewire:top-navbar-filiere />
        </div>
    </div>

    <div id="header-filiere">
        <div class="row">
            <div class="col-10">
                <div class="m-4">
                    <h1 class=" header-title">
                        <a href="#presentation-filiere">{{ $filiere->libelle }}</a>
                    </h1>
                </div>
                <div class="m-4">
                    <p class="header-title-description">
                        @if ($filiere->description == null)
                            Découvrez les opportunités, les métiers, les débouchées et les compétences destinées aux
                            apprenants en {{ $filiere->libelle }} @else{{ $filiere->description }}
                        @endif
                    </p>
                </div>
            </div>

            <div class="img-part d-flex justify-content-center col-2">
                <div class="img-decor">
                    <img class="img img-filiere " src="{{ asset('images/bg2.jpg') }}">
                </div>
            </div>
        </div>
    </div>

    <section id="content-filiere">

        <div class="container py-2">
            <div class="row d-flex justify-content-between" style="align-items: center;">
                <nav class="col-md-12" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrum">
                    <ol class="breadcrumb my-1">
                        <li class="breadcrumb-item breadcrumb-item-first"><a href="">Orientation</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('enseignement.view', ['code' => $filiere->SectionEnseignement->OptionEnseignement->TypeEnseignement->code]) }}">{{ $filiere->SectionEnseignement->OptionEnseignement->TypeEnseignement->libelle }}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('parcours.show', ['code' => $filiere->SectionEnseignement->OptionEnseignement->code]) }}">{{ $filiere->SectionEnseignement->OptionEnseignement->libelle }}</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('section', ['code' => $filiere->SectionEnseignement->id]) }}">{{ $filiere->SectionEnseignement->libelle }}</a>
                        </li>
                        <li class="breadcrumb-item">{{ $filiere->CycleEnseignement->libelle }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $filiere->libelle }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container" id="presentation-filiere">
            <div class="d-flex justify-content-center">
                <div class="col-md-8 col-xs-12 d-flex flex-column">
                    <hr class="hr_divider">
                    <div class="d-flex align-items-center mb-2 justify-content-between">
                        <h5 class="mb-0">Présentation détaillée de la filière </h5>
                        <div>
                            @livewire('o-s-p-trace-parcours', ['filiere' => $filiere])
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-filiere">
                <div class="d-flex justify-content-center row">
                    <div class="header-content-filiere px-2 d-flex flex-row col-md-4 col-xs-12 justify-content-between">
                        <div class="col-2">
                            <div class="ml-2 mt-2 img-decor-1">
                                <img src="{{ asset('images/bg2.jpg') }}" class="img ">
                            </div>
                        </div>
                        <div class="d-flex col-md-10 col-xs-12 ms-2 py-2 top-infos flex-column justify-content-between">
                            <div>
                                <h3 style="font-size: 23px;">{{ $filiere->libelle }}</h3>
                            </div>
                            <div>
                                <span>Condition d'access</span>
                                <p>
                                    @if (count($filiere->ConditionAccess) > 0)
                                        {{ $filiere->ConditionAccess[0]->libelle }}
                                    @else
                                        Aucune condition
                                    @endif
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-xs-12">
                                    <span>Diplome</span>
                                    <p class="text-diplome">{{ $filiere->CycleEnseignement->libelle }} / @if ($filiere->Diplome)
                                            {{ $filiere->Diplome->libelle }}
                                        @else
                                            Aucune diplome !!!
                                        @endif
                                    </p>
                                </div>
                                <!--<div class="col-6">
                                                                                    <span>Notation</span>
                                                                                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                                                </div>-->
                            </div>
                        </div>
                    </div>
                    {{-- <div class="body-content-filiere mb-4">
                        <div class="col-12">
                            <div class="top-content">
                                <nav>
                                    <div class="nav nav-tabs mb-3 d-flex justify-content-between" id="nav-tab"
                                        role="tablist">
                                        <button class="nav-link active" id="nav-enseignement-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-enseignement" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true">
                                            <i class="fas fa-graduation-cap"></i>
                                            Enseignement professionnels
                                        </button>
                                        <button class="nav-link" id="nav-debouche-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-debouche" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">
                                            <i class="fas fa-tags mx-2"></i>
                                            Débouches
                                        </button>
                                        <button class="nav-link" id="nav-metier-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-metier" type="button" role="tab"
                                            aria-controls="nav-contact" aria-selected="false">
                                            <i class="fas fa-tags mx-2"></i>
                                            Metiers
                                        </button>
                                        <button class="nav-link" id="nav-ecole-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-ecole" type="button" role="tab"
                                            aria-controls="nav-contact" aria-selected="false">
                                            <i class="fas fa-school mx-2"></i>
                                            Etablissements
                                        </button>
                                    </div>
                                </nav>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-enseignement" role="tabpanel"
                                    aria-labelledby="nav-enseignement-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            Pour en savoir plus sur les differents modules d'enseignement.
                                            <button class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
                                    </div>
                                    <hr>
                                </div>

                                <div class="tab-pane fade" id="nav-debouche" role="tabpanel"
                                    aria-labelledby="nav-debouche-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            Pour en savoir plus sur les differents debouchées .
                                            <button class="btn btn-xs btn-save m-0">
                                                <i class="fas fa-eye"></i>
                                                En savoir plus
                                            </button>
                                        </h4>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-metier" role="tabpanel"
                                    aria-labelledby="nav-metier-tab">

                                    <div class="container">
                                        <h4 class="title-content-1">
                                            Pour en savoir plus sur les differents metiers .
                                            <button class="btn btn-xs btn-save m-0">
                                                <i class="fas fa-eye"></i>
                                                En savoir plus
                                            </button>
                                        </h4>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-ecole" role="tabpanel"
                                    aria-labelledby="nav-ecole-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            Pour en savoir plus sur les differents ecoles .
                                            <button class="btn btn-xs btn-save m-0">
                                                <i class="fas fa-eye"></i>
                                                En savoir plus
                                            </button>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="header-content-filiere px-2 d-flex flex-row row col-md-8 col-xs-12 justify-content-between">
                        <div class="nav nav-tabs mb-3 d-flex col-md-12 col-xs-12 justify-content-between" id="nav-tab"
                            role="tablist">
                            <button class="nav-link active" id="nav-enseignement-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-enseignement" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                                <i class="fas fa-graduation-cap"></i>
                                Enseignement professionnels
                            </button>
                            <button class="nav-link" id="nav-debouche-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-debouche" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">
                                <i class="fas fa-tags mx-2"></i>
                                Débouches
                            </button>
                            <button class="nav-link" id="nav-metier-tab" data-bs-toggle="tab" data-bs-target="#nav-metier"
                                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                <i class="fas fa-tags mx-2"></i>
                                Metiers
                            </button>
                            <button class="nav-link" id="nav-ecole-tab" data-bs-toggle="tab" data-bs-target="#nav-ecole"
                                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                <i class="fas fa-school mx-2"></i>
                                Etablissements
                            </button>
                        </div>

                        <div class="col-md-12 col-xs-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-enseignement" role="tabpanel"
                                    aria-labelledby="nav-enseignement-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            <button data-bs-toggle="modal" data-bs-target="#paymentModal"
                                                class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
                                    </div>
                                    <hr>
                                </div>

                                <div class="tab-pane fade" id="nav-debouche" role="tabpanel"
                                    aria-labelledby="nav-debouche-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            <button class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
                                    </div>
                                    <hr>
                                </div>

                                <div class="tab-pane fade" id="nav-metier" role="tabpanel"
                                    aria-labelledby="nav-metier-tab">

                                    <div class="container">
                                        <h4 class="title-content-1">
                                            <button class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
                                    </div>
                                    <hr>
                                </div>

                                <div class="tab-pane fade" id="nav-ecole" role="tabpanel"
                                    aria-labelledby="nav-ecole-tab">
                                    <div class="container">
                                        <h4 class="title-content-1">
                                            <button class="btn text-white btn-xs btn-connect m-0">
                                                <i class="fas fa-eye"></i>
                                                Générer des informations complémentaires
                                            </button>
                                        </h4>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="paymentModalLabel">Abonnement </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container mt-0">
                                <div class="row">
                                    {{-- <div class="col-lg-4 mb-lg-0 mb-3">
                                        <div class="card p-3">
                                            <div class="img-box">
                                                <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png"
                                                    alt="">
                                            </div>
                                            <div class="number">
                                                <label class="fw-bold" for="">**** **** **** 1060</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                                                <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-lg-0 mb-3">
                                        <div class="card p-3">
                                            <div class="img-box">
                                                <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png"
                                                    alt="">
                                            </div>
                                            <div class="number">
                                                <label class="fw-bold">**** **** **** 1060</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                                                <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-12">
                                        <div class="card p-3">
                                            <p class="mb-0 fw-bold h4">Methodes de paiement</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card p-3">
                                            <div class="card-body border p-0">
                                                <p>
                                                    <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between"
                                                        data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                        aria-expanded="true" aria-controls="collapseExample">
                                                        <span class="fw-bold">Mobile money</span>
                                                        <span class="fab fa-cc-paypal">
                                                        </span>
                                                    </a>
                                                </p>
                                                <div class="collapse p-3 pt-0" id="collapseExample">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="h4 mb-0">Description</p>
                                                            <p class="mb-0"><span class="fw-bold">Product:</span><span
                                                                    class="c-green">: Abonnement classique</span></p>
                                                            <p class="mb-0"><span class="fw-bold">Price:</span><span
                                                                    class="c-green">: 1000 XAF</span></p>
                                                            <p class="mb-0">---</p>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <form action="{{ route('orientation.path1.traceComplet') }}"
                                                                method="POST" class="form">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form__div">
                                                                            <input type="number" name="id" hidden value="{{ $filiere->id }}">

                                                                            <input type="text" name="phone"
                                                                                type="text"
                                                                                required
                                                                                class="form-control"
                                                                                placeholder=" ">
                                                                            <label for=""
                                                                                class="form__label">Numéro de téléphone
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form__div">
                                                                            <input type="text" name="nom"
                                                                                type="text"
                                                                                required
                                                                                class="form-control"
                                                                                placeholder=" ">
                                                                            <label for=""
                                                                                class="form__label">Nom</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <button type="submit"
                                                                            class="btn btn-primary w-100">Souscrire</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body border p-0">
                                                <p>
                                                    <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                                                        data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                        aria-expanded="true" aria-controls="collapseExample">
                                                        <span class="fw-bold">Mobile money </span>
                                                        <span class="">
                                                            <span class="fab fa-cc-amex"></span>
                                                            {{-- <span class="fab fa-cc-mastercard"></span>
                                                            <span class="fab fa-cc-discover"></span> --}}
                                                        </span>
                                                    </a>
                                                </p>
                                                <div class="collapse show p-3 pt-0" id="collapseExample">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-lg-0 mb-3">
                                                            <p class="h4 mb-0">Summary</p>
                                                            <p class="mb-0"><span class="fw-bold">Product:</span><span
                                                                    class="c-green">: Abonnement basique</span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span class="fw-bold">Price:</span>
                                                                <span class="c-green">: 1000 XAF</span>
                                                            </p>
                                                            <p class="mb-0">---</p>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <form action="" class="form">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form__div">
                                                                            <input required type="text"
                                                                                class="form-control" placeholder=" ">
                                                                            <label for="" class="form__label">Card
                                                                                Numéro de téléphone </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form__div">
                                                                            <input required type="text"
                                                                                class="form-control" placeholder=" ">
                                                                            <label for="" class="form__label">Nom
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <button type="submit"
                                                                            class="btn btn-primary w-100">Souscrire</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <div class="col-8 my-3 d-flex flex-column">
                    <hr class="hr_divider">
                </div>
            </div>
        </div>

        {{-- Modal --}}
        <!-- Modal -->
        <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="paymentModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
    </section>
@endsection
