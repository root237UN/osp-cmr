@extends('layouts.app')

@section('content')
<section class="bg-cover">
    <div class="container-fluid">
        <div class="row" id="top-content">
            <div class="col-6" id="description">
                <h2 class="my-2 py-4 title-1 d-flex justify-content-start" style="align-items: center;">
                    <span class="title-type">{{$type->libelle}}</span>
                </h2>
                <div class="text-description site-text col-md-12">{{ $type->description_full }}</div>
                <div class="line-infos d-flex justify-content-between">
                    <a class="link-parcours">Des questions !</a>
                    <a class="link-ensavoir">En savoir plus!</a>
                </div>
                <hr>
                <a class="link-question site-text">Des questions. Posez-les ici !!!</a>
            </div>
            <div class="col-6 pt-4" id="content-option">
                <div class="">
                    <div class="d-flex justify-content-center pt-0 py-3">
                        <h3 class="title-option title-1-1">Choisissez <span class="" style="font-weight: bold;">une option ...</span></h3>
                    </div>

                    <div class="row d-flex justify-content-between" id='options'>

                        @forelse($type->OptionEnseignements as $option)
                        <div class="col-6 d-flex justify-content-center">
                            <a class="card card-option rounded-3" href="{{ route('parcours.show', ['code' => $option->libelle ]) }}">
                                <div class="card-body">
                                    <img class="img img-fluid img-option " src="../images/bg2.jpg" />
                                    <div class="py-4 title-2 title"><h5>{{$option->libelle}}</h5></div>
                                    <div class="option-text site-text">{{$option->description}}</div>
                                </div>
                            </a>
                        </div>
                        @empty
                        <div class='row d-flex justify-content-center'>
                            <div class="col-5 d-flex justify-content-center">
                                <a class="card card-option rounded-3" style="min-height: 150px;">
                                    <div class="card-body">
                                        <h3 class="py-4 mt-4">Aucune option trouvée !!!</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-12 my-4 d-flex justify-content-center" style="z-index: 10;">
                <a id="arrow-down" href="#actualites-onglet">
                    <i data-feather="arrow-down" class="text-light"></i>
                </a>
            </div>
        </div>
    </div>
</section>


{{-- @livewire('section-actualite',['menu'=>$content]) --}}

@endsection
