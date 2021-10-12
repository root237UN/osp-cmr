<div>
    <div class="flex-row">
        <div class="box-actions  row mx-0">
            <!-- Button trigger modal -->
            <div class="btn-add btn-action d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#addLocaliteModal">
                <i class="fas fa-plus-circle"></i>
                <span>Ajouter localité</span>
            </div>
            <div class="btn-add btn-action d-flex justify-content-center">
                <i class="fas fa-plus-circle"></i>
                <span>Ajouter des localités</span>
            </div>
            <div class="response">
                @if(session()->has('message'))
                <div class="alert p-2 alert-success">{{session('message')}}</div>
                @endif
            </div>
        </div>
    </div>

    <div class="px-0 py-2 col-12">
        <div class="card card-list">
            <div class="card-header">
                <strong class="card-title">Liste localites</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-localites" class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Arrondissement</th>
                                <th>Departement</th>
                                <th>Region</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($localites as $localite)
                            <tr>
                                <td>~</td>
                                <td>{{$localite->libelle}}</td>
                                <td>{{$localite->Arrondissement->libelle}}</td>
                                <td class="text-left">{{$localite->Arrondissement->Departement->libelle}}</td>
                                <td class="text-left text-uppercase">{{$localite->Arrondissement->Departement->Region->libelle}}</td>
                                <td class="flex-row d-flex jsutify-content-center px-2">
                                    <button data-bs-toggle="modal" data-bs-target="#updateEcoleModal" wire:click.prevent="edit({{$localite->id}})" class="btn btn-table-action p-2 flex-row d-flex justify-content-center btn-xs btn-action-edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button wire:click.prevent="delete({{$localite->id}})" class="btn btn-xs btn-table-action p-2 flex-row d-flex text-white justify-content-center  btn-info">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.create-localite')

</div>
