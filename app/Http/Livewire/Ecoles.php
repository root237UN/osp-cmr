<?php

namespace App\Http\Livewire;

use App\Models\Ecole;
use App\Models\Localite;
use App\Models\TypeEcole;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class Ecoles extends Component
{
    public $ecoles = [];
    public $types = [];
    public $localites = [];

    /**fields for insertion */
    public $libelle;
    public $type;
    public $localite;
    public $cycle1;
    public $cycle2;
    public $ids;

    public function resetInput()
    {
        $this->libelle = "";
        $this->type = 0;
        $this->cycle1 = 0;
        $this->cycle2 = 0;
        $this->localite = 0;
        $this->ids = 0;
    }

    public function store()
    {
        try {
            $validateData = $this->validate([
                'libelle' => ['required', 'string', 'max:255', 'unique:ecoles'],
                'type' => ['required', 'integer'],
                'localite' => ['required', 'integer'],
                'cycle1' => ['required'],
            ]);
            $ecole = new Ecole();
            $ecole->libelle = $validateData['libelle'];
            $ecole->type_ecole_id = (int)$validateData['type'];
            $ecole->localite_id = (int)$validateData['localite'];
            $ecole->cycle_1 = (int)$validateData['cycle1'];
            $ecole->cycle_2 = (int)$this->cycle2;

            if ($ecole->save()) {
                session()->flash('message', 'Ecole cree avec success !!!');
                $this->resetInput();
            } else session()->flash('messageError', 'Erreur lors de l\'ajout de l\école !!!');
            $this->emit('EcoleAjouter');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            $ecole = Ecole::where('id', $id)->first();
            $this->ids = $ecole->id;
            $this->libelle = $ecole->libelle;
            $this->type = $ecole->type_ecole_id;
            $this->cycle1 = $ecole->cycle_1;
            $this->cycle2 = $ecole->cycle_2;
            $this->localite = $ecole->localite_id;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update()
    {

        try {
            $this->validate([
                'libelle' => ['required', 'string', 'max:255'],
                'type' => ['required', 'integer'],
                'localite' => ['required', 'integer'],
                'cycle1' => ['required'],
            ]);
            if ($this->ids) {
                $ecole = Ecole::find($this->ids);
                $ecole->libelle = $this->libelle;
                $ecole->type_ecole_id = (int)$this->type;
                $ecole->cycle_1 = (int)$this->cycle1;
                $ecole->cycle_2 = (int)$this->cycle2;
                $ecole->localite_id = (int)$this->localite;

                if ($ecole->save()) {
                    session()->flash('message', 'Ecole mise a jour avec success !!!');
                    $this->resetInput();
                    $this->emit('EcoleMisAJour');
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        try {
            if ($id) {
                Ecole::where('id', $id)->delete();
                session()->flash('message', 'Suppression terminée !!!');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function render()
    {
        $this->ecoles = Ecole::all();
        $this->types = TypeEcole::all();
        $this->localites = Localite::all();
        return view('livewire.ecoles');
    }
}
