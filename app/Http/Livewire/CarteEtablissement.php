<?php

namespace App\Http\Livewire;

use App\Models\Ecole;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CarteEtablissement extends Component
{
    public $ecoles = [];
    public $nbres = [];
    public function render()
    {
        $this->ecoles = Ecole::all();
        //  = DB::select("SELECT COUNT(*) AS total, `regions`.libelle FROM `ecoles` INNER JOIN `localites` ON `ecoles`.localite_id=`localites`.id INNER JOIN `arrondissements` ON `localites`.arrondissement_id=`arrondissements`.id INNER JOIN `departements` ON `arrondissements`.departement_id=`departements`.id INNER JOIN `regions` ON `departements`.region_id=`regions`.id GROUP BY `regions`.id ");
        // $this->nbres = DB::select("SELECT COUNT(*) AS total, `regions`.`libelle`  FROM `regions` INNER JOIN `departements` ON `departements`.region_id=`regions`.id INNER JOIN `arrondissements` ON `arrondissements`.departement_id=`departements`.id INNER JOIN `localites`ON `localites`.arrondissement_id=`arrondissements`.id INNER JOIN `ecoles` ON `ecoles`.localite_id=`localites`.id GROUP BY `regions`.id order by `regions`.libelle asc");

        return view('livewire.carte-etablissement');
    }
}
