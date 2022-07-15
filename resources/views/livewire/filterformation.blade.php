<div>
    <div class="row">
        <div class="col-md-12" style="padding-left: 35px;">
            <div class="content">
                <div class="content-header ">
                    <form class="form form-inline">
                        <div class="row-input">
                            <input class="form-control" placeholder="Rechercher ..." name="">
                            <button type="button" class="btn btn-success">
                                <i class="fas fa-search"></i><span class="mr-2">Rechercher</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="content-body">
                    <p class="result-count my-2">{{$type->Formations->count()}} resultats</p>
                    <div class="content-card row px-3">
                        @forelse($formations as $formation)
                        <div class="card card-formation my-2 py-4">
                            <a href="#">
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
                            <hr style="margin-bottom: 0px;">
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
                                <h3 class="mt-2 libelle-formation">Aucune formation disponible !!</h3>
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
                        {{$formations->onEachSide(10)->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
