<div>
    <div class="row">
        {{-- <div class="col-md-2 py-2" id="filtre">
            <p class="title-filtre d-flex justify-content-between">Filtre </p>

            <div class="content-filtre">
                <form>
                    <div class="item-filtre my-2">
                        <h4 class="item-filtre-title">
                            <span>Localité</span>
                            <button class="btn text-dark btn-display" id="btn-display-localite" type="button"> <i class="fas fa-chevron-down"></i></button>
                        </h4>
                        <!-- Liste des localites -->
                        <div class='list-localite'>
                            <input type="text" wire:model='searchLocalite' name="search-localite" class="form-control">
                            <div class="content-item content-item-1 my-2">
                                @forelse($localites as $localite)
                                <div class="form-check my-2">
                                    <input type="radio" class="form-check-input" wire:model='selectedLocalite' value="{{$localite->libelle}}" name="localite">
                                    <label class="form-check-label" for="localite-value">{{$localite->libelle}}</label>
                                </div>
                                @empty
                                <div class="form-check my-2">
                                    <input type="checkbox" class="form-check-input" value="" id="localite-value" name="localite">
                                    <label class="form-check-label" for="localite-value">Vide !!!</label>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
        <div class="col-md-12" style="padding-left: 35px;">
            <div class="content site-text">
                <div class="content-header ">
                    <form class="form form-inline">
                        <div class="row-input">
                            <input class="form-control" wire:model='searchText' placeholder="Rechercher ...">
                            <button type="button" class="btn btn-success">
                                <i class="fas fa-search"></i><span class="mr-2">Rechercher</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="content-body">
                    <p class="result-count my-2">{{$filieres->count()}} résultats</p>
                    <div class="content-card px-3 row">
                        @forelse($filieres as $filiere)
                        <div class="card card-formation my-2 py-4">
                            <a href="{{ route('showFiliere', ['code' => $filiere->id ]) }}">
                                <div class="card-formation-header">
                                    <div class="card-formation-img">
                                        <img class="img -img-fluid" src="../images/bg3.jpg">
                                        <p class="description-formation site-text">@if($filiere->description == NULL)Description de la filiere ... @else{{$filiere->description}}@endif</p>
                                    </div>
                                    <h3 class="mt-2 libelle-formation title-2">{{$filiere->libelle}} ({{$filiere->code}})</h3>
                                    <p class="diplome-formation site-text-1">@if($filiere->Diplome){{$filiere->Diplome->libelle}} @else Aucun diplome associe !!! @endif</p>
                                </div>
                                <div class="card-formation-content row">
                                    {{-- <button class="btn btn-xs my-1">@if($filiere->Enseignements){{$filiere->Enseignements->count()}} enseignements professionnelles @else Vide !!! @endif</button> --}}
                                    {{-- <button class="btn btn-xs">@if($filiere->Competences){{$filiere->Competences->count()}} competences techniques @else Vide !!! @endif</button> --}}
                                    <button class="btn btn-xs">@if($filiere->Metier){{$filiere->Metier->count()}} metiers ouverts @else Vide !!! @endif</button>
                                    <button class="btn btn-xs">@if($filiere->Debouches){{$filiere->Debouches->count()}} opportunites @else Vide !!! @endif</button>
                                </div>
                            </a>
                            <hr style="margin-bottom: 0px;color: #243a5e;">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-xs btn-save my-2">
                                    <i class="fas fa-eye"></i>
                                    En savoir plus
                                </button>
                            </div>
                        </div>
                        @empty
                        <div class="card card-formation py-4">
                            <div class="card-formation-header">
                                <h3 class="mt-2 libelle-formation">Aucune filiere disponible !!</h3>
                            </div>
                            <div class="card-formation-content">
                                <button class="btn btn-xs">Vide !!</button>
                                <button class="btn btn-xs">Vide !!</button>
                                <button class="btn btn-xs">Vide !! </button>
                            </div>
                            <hr>
                        </div>
                        @endforelse
                    </div>

                    <div class="pt-2 my-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
