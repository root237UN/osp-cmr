<div>
    <div class="flex-row">
        <div class="box-actions  row mx-0">
            <!-- Button trigger modal -->
            <div class="btn-add btn-action d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#addStructureModal">
                <i class="fas fa-plus-circle"></i>
                <span>Ajouter</span>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addStructureModal" tabindex="-1" aria-labelledby="addStructureModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form" wire:submit.prevent="store">
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Nom structure</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="form-group col-6">
                            <label>Code : </label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
