<?php

namespace App\Http\Livewire;

use App\Models\Ecole;
use App\Models\FiliereEnseignement;
use Livewire\Component;

class EcoleSpecialite extends Component
{
    public $state = [];
    public $ecole;
    public $listEcole;
    public $listFiliere1;
    public $listFiliere2;

    public function render()
    {
        $this->listEcole = Ecole::all();
        if ($this->ecole) {
            //$this->listFiliere1 = FiliereEnseignement::where('cycle_enseignement_id', $this->ecole->cycle_1)->get() ;
        }
        else $this->listFiliere1 = [];
        $this->listFiliere2 = FiliereEnseignement::where('cycle_enseignement_id', 2)->get();
        //dd( $this->state);
        return view('livewire.ecole-specialite');
    }
}
