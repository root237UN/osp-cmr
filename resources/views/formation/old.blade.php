<div class="col-md-2 py-2 " id="filtre">
    <p class="title-filtre d-flex justify-content-between">Filtre </p>
    <div class="content-filtre">
        <form>
            <div class="item-filtre my-2">
                <h4 class="item-filtre-title">
                    <span>Localite</span>
                    <button class="btn text-dark btn-display" id="btn-display" type="button"> <i class="fas fa-chevron-down"></i></button>
                </h4>
                <input type="text" name="search-localite" class="form-control">
                <div class="content-item content-item-1 my-2">
                    @forelse($localites as $localite)
                    <div class="form-check my-2">
                        <input type="checkbox" class="form-check-input" value="{{$localite->libelle}}" id="localite-value" name="localite">
                        <label class="form-check-label" for="localite-value">{{$localite->libelle}}</label>
                    </div>
                    @empty
                    <div class="form-check my-2">
                        <input type="checkbox" class="form-check-input" value=""  id="localite-value" name="localite">
                        <label class="form-check-label" for="localite-value">Vide !!!</label>
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="item-filtre  my-2">
                <h4 class="item-filtre-title">
                    <span>Structure</span>
                    <button class="btn text-dark btn-display" type="button"> <i class="fas fa-chevron-down"></i></button>
                </h4>
                <input type="text" name="search-parcours" class="form-control">
                <div class="content-item my-2">
                    @forelse($structures as $structure)
                    <div class="form-check my-2">
                        <input type="checkbox" class="form-check-input" value="{{$structure->libelle}}" id="structure-value" name="parcours">
                        <label class="form-check-label" for="parcours-value">{{$structure->libelle}}</label>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </form>
    </div>
</div>


<div class="col-8 d-flex justify-content-center">
    <a class="card card-option rounded-3"
        href="{{ route('formation.show', ['code' => $type->libelle]) }}">
        <div class="card-body">
            <img class="img img-fluid img-option " src="{{ $type->image }}" />
            <h3 class="py-4 mb-0">{{ $type->libelle }}</h3>
            <p class="option-text">{{ $type->description }}</p>
        </div>
    </a>
</div>

<a href="{{route('formation.details', ['code' => $formation->libelle])}}">
    <div class="card-formation-header">
        <div class="card-formation-img">
            <img class="img -img-fluid" src="../images/bg3.jpg">
            <p class="description-formation">@if($formation->description == NULL)Description de la formation ... @else{{$formation->description}}@endif</p>
        </div>
        <h3 class="mt-2 libelle-formation">{{$formation->libelle}}</h3>
        <p class="diplome-formation">@if($formation->Diplome){{$formation->Diplome->libelle}} @else 2 Certificats associe !!! @endif</p>
    </div>
    <div class="card-formation-content">
        {{-- <button class="btn btn-xs my-1">@if($formation->Structure){{$formation->Structure->count()}} structures de formations @else Vide !!! @endif</button> --}}
        {{-- <button class="btn btn-xs">
            <?php
            $c = 0;
            if ($formation->Structure) {
                foreach ($formation->Structure as $structure) {
                    if ($structure->Localite) {
                        $c += count($structure->Localite);
                    }
                }
                echo $c . " Localites";
            } else echo "Vide !!!";
            ?>
        </button> --}}
        <button class="btn btn-xs">
            <?php
            $c = 0;
            if ($formation->Structure) {
                foreach ($formation->Structure as $structure) {
                    if ($structure->ConditionAccess) {
                        $c += count($structure->ConditionAccess);
                    }
                }
                echo $c . " Condition d'access ";
            } else echo "Vide !!!";
            ?>
        </button>
        <button class="btn btn-xs">
            <?php
                $duree = "";
                $i = 0;
                if ($formation->Structure) {
                    foreach ($formation->Structure as $structure) {
                        $duree = $structure->duree;
                    }
                    echo $duree .' de formation';
                } else echo "Vide !!!";
                ?>
        </button>
    </div>
</a>
