<?php

namespace App\Http\Controllers;

use App\Models\cycleEnseignement;
use App\Models\filiereEnseignement;
use App\Models\optionEnseignement;
use App\Models\sectionEnseignement;
use App\Models\TypeEnseignement;
use Illuminate\Http\Request;
use App\Models\TypeFormation;
use App\Models\Localite;
use App\Models\Structure;
use App\Models\Formation;


class WebSiteController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function orientation()
    {
        $type_enseignements =  TypeEnseignement::all();
        $type_formation = TypeFormation::all();

        return view('orientation', ['type_enseignements' => $type_enseignements, "type_formations" => $type_formation]);
    }

    public function showTypeEnseignement($code)
    {
        $type = TypeEnseignement::where('code', '=', $code)->firstorfail();
        return view('types',['type' => $type]);
    }

    public function showFormation(Request $request)
    {
        $formation = TypeFormation::where('code', $request->code)->firstorfail();
        return view('formation', ['formation' => $formation]);
    }

    public function presentationFormation(Request $request)
    {
        $type = TypeFormation::where('code', $request->code)->firstorfail();
        $formations = Formation::where('type_formation_id', intval($type->id))->paginate(10);

        $localites = Localite::all();
        $structures = Structure::all();
        return view('formation/presentation', ["localites" => $localites,"structures" => $structures, "type" => $type, "formations" => $formations]);
    }

    public function detailsFormation(Request $Request)
    {
        //dd($Request);
        $formation = Formation::find(intval($Request->code));
        $structures = $formation->Structure()->where('notation', '>=', 4)->orderBy('libelle')->get();
        //dd($structures);
        return view('formation.detail', ['formation' => $formation, 'structures' => $structures]);
    }


    public function InfosTypeFormation(Request $request)
    {
        $type = TypeFormation::where('code', $request->code)->firstorfail();
        return view('infosFormation', ['type' => $type]);
    }

    public function showParcours($code)
    {
        $option = optionEnseignement::where('code', '=', $code)->firstorfail();
        return view('parcours',['option' => $option]);
    }

    public function formation()
    {
        return view('formation');
    }

    public function structure()
    {
        return view('structure');
    }

    public function etablissement()
    {
        return view('etablissement/presentation');
    }

    public function contact()
    {
        return view('contact');
    }

    public function teacher()
    {
        return view('teacher');
    }

    public function dev()
    {
        return view('dev');
    }

    /** Rendu des sections pour chaque option d'enseignement */
    public function section($code)
    {
        $section = sectionEnseignement::findorFail(intval($code));
        $cycles = cycleEnseignement::all();
        return view('section', ['section' => $section, 'cycles'=>$cycles]);
        //dd($section);
    }


    public function filiere(Request $request)
    {
        $id_cycle = intval($request->cycle);
        $id_section = intval($request->section);

        $section = sectionEnseignement::findorFail($id_section);
        $cycle = cycleEnseignement::findorFail($id_cycle);

        $localites = Localite::all();

        $filieres = filiereEnseignement::where('cycle_enseignement_id',$id_cycle)->where('section_enseignement_id',$id_section)->paginate(10);
        return view('filiere/presentation', ["section" => $section, "cycle" =>$cycle, "filieres" =>$filieres, "localites" =>$localites ]);
        //dd($filieres);
    }

    public function showFiliere(Request $request)
    {
        $filiere = filiereEnseignement::find(intval($request->code));
        return view('filiere/detail', ["filiere" => $filiere]);
    }


    /** Enseignement */
    public function enseignement()
    {
        return view('enseignement/presentation');
    }
}
