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
        $this->nbres = DB::select("SELECT COUNT(*) AS total, `regions`.libelle FROM `ecoles` INNER JOIN `localites` ON `ecoles`.localite_id=`localites`.id INNER JOIN `arrondissements` ON `localites`.arrondissement_id=`arrondissements`.id INNER JOIN `departements` ON `arrondissements`.departement_id=`departements`.id INNER JOIN `regions` ON `departements`.region_id=`regions`.id GROUP BY `regions`.id ");

        return view('livewire.carte-etablissement');
    }
}
