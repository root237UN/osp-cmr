<?php

namespace App\Http\Livewire;

use App\Models\Structure;
use Livewire\Component;

class Structures extends Component
{
    public function store()
    {
        $structure = new Structure();
        dd($structure);
    }
    public function render()
    {
        return view('livewire.structures');
    }
}
