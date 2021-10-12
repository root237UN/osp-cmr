
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addEcoleModal" tabindex="-1" aria-labelledby="addEcoleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form" wire:submit.prevent="store">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addEcoleModalLabel">Nouvelle Ecole</h5>
                        <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label>Nom ecole</label>
                                <input type="text" class="form-control" required placeholder="Ecole ..." wire:model="libelle" />
                                @error('libelle') <span class="text-danger text-response-error">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>Type</label>
                                <select class="form-select" aria-label="Default select example" wire:model="type">
                                    <option selected>Type</option>
                                    @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->libelle}}</option>
                                    @endforeach
                                </select>
                                @error('type') <span class="text-danger text-response-error">{{$message}}</span> @enderror

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <p class="mb-0"> <label>Cycle</label></p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" wire:model="cycle1" required value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">Cycle 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" wire:model="cycle2" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">cycle 2</label>
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label>Localite</label>
                                <select class="form-select" aria-label="Default select example" required wire:model="localite">
                                    <option selected>Localite</option>
                                    @foreach($localites as $localite)
                                    <option value="{{$localite->id}}">{{$localite->libelle}}</option>
                                    @endforeach
                                </select>
                                @error('localite') <span class="text-danger text-response-error">{{$message}}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-form-app"><i class="fas fa-plus-circle"></i>Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
