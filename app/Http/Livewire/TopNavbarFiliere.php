<?php

namespace App\Http\Livewire;

use App\Models\OptionEnseignement;
use App\Models\SectionEnseignement;
use App\Models\TypeEnseignement;
use Livewire\Component;

class TopNavbarFiliere extends Component
{
    public $enseignements = [];
    public $options = [];
    public $sections = [];

    public function render()
    {
        $this->enseignements = TypeEnseignement::all();
        $this->options = OptionEnseignement::all();
        $this->sections = SectionEnseignement::all();
        return view('livewire.top-navbar-filiere');
    }
}
