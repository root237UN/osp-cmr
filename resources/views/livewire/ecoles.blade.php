<div>
    <div class="flex-row">
        <div class="box-actions  row mx-0">
            <!-- Button trigger modal -->
            <div class="btn-add btn-action d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#addEcoleModal">
                <i class="fas fa-plus-circle"></i>
                <span>Ajouter école</span>
            </div>
            <div class="btn-add btn-action d-flex justify-content-center">
                <i class="fas fa-plus-circle"></i>
                <span>Ajouter des écoles </span>
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
                <strong class="card-title">Liste Ecoles</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-ecoles" class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Localite</th>
                                <th>Cycle 1</th>
                                <th>Cycle 2</th>
                                <th>Modification</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ecoles as $ecole)
                            <tr>
                                <td>~</td>
                                <td>{{$ecole->libelle}}</td>
                                <td>{{$ecole->Localite->libelle}}</td>
                                <td class="text-center">@if($ecole->cycle_1 == 1) <i class="fas text-app fa-check"><i> @else @endif</td>
                                <td class="text-center">@if($ecole->cycle_2 == 1) <i class="fas text-app fa-check"><i> @else @endif</td>
                                <td>{{$ecole->updated_at}}</td>
                                <td class="flex-row d-flex jsutify-content-center px-2">
                                    <button data-bs-toggle="modal" data-bs-target="#updateEcoleModal" wire:click.prevent="edit({{$ecole->id}})" class="btn btn-table-action p-2 flex-row d-flex justify-content-center btn-xs btn-action-edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button wire:click.prevent="delete({{$ecole->id}})" class="btn btn-xs btn-table-action p-2 flex-row d-flex text-white justify-content-center  btn-info">
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

    @include('livewire.create-ecole')
    @include('livewire.update-ecole')

</div>
