<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FiliereEnseignement;
use Livewire\WithPagination;
use App\Models\Localite;

class FilterFiliere extends Component
{

    // Left
    public $searchLocalite;
    public $selectedLocalite;

    // 
    public $searchText;
    public $id_cycle;
    public $id_section;
    public $ecole;

    public function render()
    {
        // Selection des filieres
        // $filieres = FiliereEnseignement::where('cycle_enseignement_id', $this->id_cycle)->where('section_enseignement_id', $this->id_section)->paginate(10);
        $result = [];
        $etablissements = Localite::where('libelle', 'like', '%' . $this->selectedLocalite . '%')->firstorfail()->ecole()->get();

        if (!$this->selectedLocalite) {
            $result = FiliereEnseignement::where('cycle_enseignement_id', $this->id_cycle)
                ->where('section_enseignement_id', $this->id_section)
                ->where(function ($sub_query) {
                    $sub_query->where('libelle', 'like', '%' . $this->searchText . '%')
                        ->orWhere('code', 'like', '%' . $this->searchText . '%')
                        ->orWhere('description', 'like', '%' . $this->searchText . '%');
                })->get();
        } else {   
            if (count($etablissements) > 0) {
                foreach ($etablissements as $key) {
                    $result = $key->filiere()->where('cycle_enseignement_id', $this->id_cycle)
                        ->where('section_enseignement_id', $this->id_section)
                        ->where(function ($sub_query) {
                            $sub_query->where('libelle', 'like', '%' . $this->searchText . '%')
                                ->orWhere('code', 'like', '%' . $this->searchText . '%')
                                ->orWhere('description', 'like', '%' . $this->searchText . '%');
                        })->get();
                };
            }    
        }

        $filieresResult = FiliereEnseignement::where(function ($sub_query) {
            $sub_query->where('libelle', 'like', '%' . $this->searchText . '%')
                ->orWhere('code', 'like', '%' . $this->searchText . '%')
                ->orWhere('description', 'like', '%' . $this->searchText . '%');
        });

        // Recherche de la localte
        // $etablissements = Localite::where('libelle','like','%'.$this->selectedLocalite.'%')->firstorfail()->ecole()->get();

        // dd($tab[0]);
        $localites = Localite::where('libelle', 'like', '%' . $this->searchLocalite . '%')
            ->orderBy('libelle', 'asc')
            ->get();

        return view('livewire.filter-filiere', ['filieres' => $result, 'localites' => $localites]);

    }
}
