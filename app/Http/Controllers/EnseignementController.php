<?php

namespace App\Http\Controllers;

use App\Models\CycleEnseignement;
use App\Models\MenuVisite;
use App\Models\OptionEnseignement;
use App\Models\SectionEnseignement;
use App\Models\TypeEnseignement;
use App\Models\TypeFormation;

use Illuminate\Http\Request;

class EnseignementController extends Controller
{
    //
    public $content;

    public function __construct()
    {
        $this->content = MenuVisite::where('titre','enseignement secondaire')->firstorfail();
    }

    public function index()
    {
        $type_enseignements =  TypeEnseignement::all();
        $type_formation = TypeFormation::all();
        return view('enseignement/presentation', ['content'=>$this->content,'type_enseignements' => $type_enseignements, "type_formations" => $type_formation]);
    }

    public function showTypeEnseignement($code)
    {
        $type = TypeEnseignement::where('libelle_1', '=', $code)->firstorfail();
        return view('enseignement/types', ['content'=>$this->content,'type' => $type]);
    }

    public function section(Request $request)
    {
        $section = SectionEnseignement::findorFail(intval($request->id));
        $cycles = CycleEnseignement::all();
        return view('enseignement/section', ['content'=>$this->content,'section' => $section, 'cycles' => $cycles]);
    }

    public function showParcours($code)
    {
        $option = OptionEnseignement::where('libelle', 'like', '%'.$code.'%')->firstorfail();
        return view('enseignement/parcours', ['content'=>$this->content,'option' => $option]);
    }

}
