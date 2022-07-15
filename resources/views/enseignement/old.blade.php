
<!--<section id="content-option">
    <div class="container">
        <div class="d-flex justify-content-center py-5">
            <h1 class="title-option">Choisissez <span class="" style="font-weight: bold;">une option ...</span></h1>
        </div>

        <div class="row d-flex justify-content-center" id='options'>

            @forelse($type->optionEnseignements as $option)
            <div class="col-4 d-flex justify-content-center">
                <a class="card card-option rounded-3" href="{{ route('parcours.show', ['code' => $option->code ]) }}">
                    <div class="card-body">
                        <img class="img img-thumbnail img-option py-4" src="" />
                        <h3 class="py-4">{{$option->libelle}}</h3>
                        <p class="option-text">{{$option->description}}</p>
                    </div>
                </a>
            </div>
            @empty
            <div class='row d-flex justify-content-center'>
                <div class="col-4 d-flex justify-content-center">
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
</section>-->
