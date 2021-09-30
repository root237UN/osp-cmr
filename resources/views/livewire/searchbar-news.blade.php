<div class="col-md-3 left-part">
            <div class="rechercher-parcours">
                <div class="rechercher-header">
                    <h2 class="title-rechercher">Ton parcours en main</h2>
                    <p>Les métiers ouvert sur marche Camerounais</p>
                </div>
                <div class="rechercher-body">
                    <div class="content">
                        <p><span>Travailler dans</span> <span id="typed2"></span> </p>
                        <form class="form-inline form row m-1">
                            @csrf
                            <div class="form-group col-10 p-0">
                                <input type="text" class="form-control" value="" name="metier">
                            </div>
                            <button type="submit" class="p-0 btn btn-xs text-white btn-success col d-flex" style="justify-content: center;align-items: center;">
                                <i class="fa fa-search fa-2x"></i>
                            </button>
                        </form>
                    </div>
                    <div class="content">
                        <p><span>Decouvrir les metiers </span> </p>
                        <a class="p-0 btn btn-xs text-white btn-success col d-flex" style="font-size:14px;justify-content: center;align-items: center;">
                            <span class="text-uppercase m-2">Decouvrir</span>
                            <i class="fa fa-chevron-right fa-1x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
