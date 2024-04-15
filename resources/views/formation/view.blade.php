@extends('layouts.screen')

@section('css')
    {{-- <link href="{{ asset('css/top-content.css') }}" rel="stylesheet"> --}}
    <style>
        .card-option {
            transition: all ease-in-out 300ms;
            border: none;
            min-height: 250px;
            width: 300px;
            text-align: center;
            border: 1px inset #3cad7442;
            text-align: center;
            background-color: #f8fafc0f;
        }

        img.img-option {
            width: 50px !important;
            height: 50px !important;
        }

        .card-option:hover {

            box-shadow: 0 5px 20px rgba(0, 0, 0, .15), 0 4px 4px -2px rgba(0, 0, 0, .1) !important;
            opacity: 1;
            background: linear-gradient(45deg, #38c17252, #38c17252);
            transform: translateY(-5px)scale(1);
        }

        .option-text {
            color: #ffffff;
            font-weight: 200;
            font-style: italic;
            font-size: 14.4px;
            text-align: center;
            opacity: .8;
            line-height: 1.5rem;
        }

        .option-text::after {
            position: absolute;
            bottom: -20px;
            left: 50%;
            content: 'Decouvrir';
            transform: translateX(-50%);
        }

        .option-text::after,
        .small-text-banner {
            display: inline-block;
            background: #fcfcfc;
            box-shadow: 0 1px 5px #38c172, inset 0 1px rgba(255, 255, 255, .2);
            border-radius: 999px;
            padding: 5px 20px;
            font-size: 14px;
            color: #00000096 !important;
            transition: transform .2s;
            white-space: nowrap;
            font-family: 'Gelasio', serif;
        }

        .img-option {
            min-width: 50px;
            min-height: 50px;
            border-radius: 50px;
        }

        .text-description {
            text-align: justify;
            line-height: 30px;
            font-size: 16px;
            color: #fff !important;
        }
    </style>
@endsection

@section('content-header')
    <div id="description" class="container-fluid">
        <div class="row" id='top-content'>
            <div class="col-6 me-0" id="banner-text">
                <div class=" title-1 ">
                    <h1 class="mb-4 d-flex justify-content-start" style="align-items: center;">
                        <span class="title-type">{{ $content->libelle }}</span>
                    </h1>
                </div>

                <div class="text-description text-white site-text col-md-12">
                    {{ $content->description }}
                </div>
                <div class="line-infos mt-3 site-text d-flex justify-content-between">
                    <a class="link-parcours" href="#">Des questions !</a>
                    <a class="link-ensavoir" href="#">En savoir plus!</a>
                </div>
                <hr>
                <p class="link-question site-text text-white">Des questions. Posez-les ici !!!</p>
            </div>

            <div class="col-5" id="content-option">
                <div class="">
                    <div class="d-flex justify-content-center pt-0 py-5">
                        <h3 class="title-option title-1-1">Choisissez <span class="" style="font-weight: bold;">une
                                formation ...</span>
                        </h3>
                    </div>

                    <div class="row d-flex justify-content-center" id='options'>

                        @forelse($typesFormation as $type)
                            <div class="col-8 d-flex justify-content-center">
                                <a class=" "
                                    href="{{ route('formation.formation.show', ['code' => $type->libelle]) }}">
                                    <div class="card-body">
                                        <img class="img img-thumbail img-option" height="50px" src="{{ $type->image }}" />
                                        <h6 class="py-4 mb-0 text-white title-2">{{ $type->libelle }}</h6>
                                        <p class="option-text site-text">{{ $type->description }}</p>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class='row d-flex justify-content-center'>
                                <div class="col-5 d-flex justify-content-center">
                                    <a class="card card-option rounded-3" style="min-height: 150px;">
                                        <div class="card-body">
                                            <h3 class="py-4 mt-4">Aucune option trouvee !!!</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-8 d-flex justify-content-end" style="z-index: 10;">
                <a id="arrow-down" href="#options">
                    <i data-feather="arrow-down" class="text-light"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- @livewire('section-actualite',['menu'=>$content]) --}}
@endsection
