<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addLocaliteModal" tabindex="-1" aria-labelledby="addLocaliteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form" wire:submit.prevent="store">
                <div class="modal-header">
                    <h5 class="modal-title" id="addLocaliteModalLabel">Nouvelle Localite</h5>
                    <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Nom localite : </label>
                            <input type="text" class="form-control" required placeholder="Localite ..." wire:model="libelle">
                            @error('libelle') <span class="text-danger text-response-error">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group col-6">
                            <label>Type</label>
                            <select class="form-select" aria-label="Default select example" wire:model="arrondissement">
                                <option selected>Type</option>
                                @foreach($arrondissements as $arrondissement)
                                <option value="{{$arrondissement->id}}">{{$arrondissement->libelle}}</option>
                                @endforeach
                            </select>
                            @error('arrondissement') <span class="text-danger text-response-error">{{$message}}</span> @enderror

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-form-app"><i class="fas fa-plus-circle pe-2"></i>Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
