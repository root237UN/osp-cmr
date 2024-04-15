<div>
    <form class="form form-inline" method="get"  wire:submit.prevent='traceParcours()'>
        @csrf
        <input type="number"  wire:model='filiere_id' name="id" hidden value="{{ $filiere->id }}">
        <button type="submit"
            class="btn btn-connect text-white">
            <i class="bi bi-text-paragraph me-2"></i>Tracer mon parcours
        </button>
    </form>
</div>
