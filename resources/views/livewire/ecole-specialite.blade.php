<div>
    <div class="flex-row">
        <div class="box-actions  row mx-0">
            <!-- Button trigger modal -->
            <div class="btn-add btn-action d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#addSpecialiteToEcole">
                <i class="fas fa-project-diagram"></i>
                <span>Ecole - Specialité</span>
            </div>
            <div class="response">
                @if(session()->has('message'))
                <div class="alert p-2 alert-success">{{session('message')}}</div>
                @endif
            </div>
        </div>
    </div>

    @include('livewire.create-specialite-ecole')
</div>
