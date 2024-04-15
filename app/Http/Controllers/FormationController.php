<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Localite;
use App\Models\MenuVisite;
use App\Models\StructureFormation;
use App\Models\TypeFormation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //

    public function index(Request $request)
    {
        $content = MenuVisite::where('titre','like', '%formation professionnelle%')->firstorfail();
        $typesFormation = TypeFormation::all();
        // dd($typesFormation);
        return view('formation/view',['typesFormation' => $typesFormation,'content'=>$content]);
    }

    public function showFormation(Request $request)
    {
        $formation = TypeFormation::where('libelle', 'like', '%'.$request->code.'%')->firstorfail();
        return view('formation', ['formation' => $formation]);
    }

    public function presentationFormation(Request $request)
    {
        $type = TypeFormation::where('code', $request->code)->firstorfail();
        $formations = Formation::where('type_formation_id', intval($type->id))->paginate(10);

        $localites = Localite::orderBy('libelle','asc')->get();
        $structures = StructureFormation::orderBy('libelle', 'asc')->get();
        return view('formation/presentation', ["localites" => $localites, "structures" => $structures, "type" => $type, "formations" => $formations]);
    }

    public function detailsFormation(Request $Request)
    {
        //dd($Request);
        $formation = Formation::where('libelle', 'like', '%'.$Request->code.'%')->firstorfail();
        $structures = $formation->Structure()->where('notation', '>=', 4)->orderBy('libelle')->get();
        return view('formation.detail', ['formation' => $formation, 'structures' => $structures]);
    }


    public function InfosTypeFormation(Request $request)
    {
        $type = TypeFormation::where('code', $request->code)->firstorfail();
        return view('infosFormation', ['type' => $type]);
    }


}
