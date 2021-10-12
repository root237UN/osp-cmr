<?php

namespace App\Http\Livewire;

use App\Models\Arrondissement;
use App\Models\Localite;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Localites extends Component
{
    public $localites = [];
    public $arrondissements = [];

    /**fields for insertion */
    public $libelle;
    public $arrondissement;
    public $ids;

    public function resetInput()
    {
        $this->libelle = "";
        $this->arrondissement = 0;
        $this->ids = 0;
    }
    public function store()
    {
        try {
            $validateData = $this->validate([
                'libelle' => ['required', 'string', 'max:255', 'unique:localites'],
                'arrondissement' => ['required', 'integer'],
            ]);
            $localite = new Localite();
            $localite->libelle = $validateData['libelle'];
            $localite->arrondissement_id = (int)$validateData['arrondissement'];

            if ($localite->save()) {
                session()->flash('message', 'Localité créée avec success !!!');
                $this->resetInput();
            } else session()->flash('messageError', 'Erreur lors de l\'ajout de la localité !!!');
            $this->emit('LocaliteAjouter');
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function render()
    {
        $this->localites = Localite::all();
        $this->arrondissements = DB::table('arrondissements')->select()->orderBy('libelle')->get(); //Arrondissement::all()->orderBy('libelle','ASC');
        return view('livewire.localites');
    }
}
