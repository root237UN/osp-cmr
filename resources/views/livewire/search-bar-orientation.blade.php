<div>
    <div class="row my-4 box-search p-0">
        <div class="menu-search justify-content-center d-flex p-0">
            <div class='col-md-2 box-search-term'>
                <div class='box-search-item'>
                    <label class="global-term-search">
                        Enseignement secondaire
                    </label>
                    <i class="bi bi-three-dots-vertical"></i>
                </div>
            </div>

            <div class='box-search-input col-md-6'>
                <form class='form-search' method="GET" action="{{ url('search') }}">
                    @csrf
                    <div class='icon-search'>
                        <i class="bi bi-search"></i>
                    </div>
                    <div class='search-input-wrapper'>
                        <input type="text" class='search-input' name='term' id='search-input'
                            placeholder="Besoin d'une orientation ? " />
                        <input type="hidden" name='global' value='job' />
                        {{-- <input type="submit" class='btn btn-xs btn-box-search hidden-btn' value='Rechercher' /> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
