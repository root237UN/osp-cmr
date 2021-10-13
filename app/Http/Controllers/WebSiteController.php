<?php

namespace App\Http\Controllers;

use App\Models\CycleEnseignement;
use App\Models\Ecole;
use App\Models\FiliereEnseignement;
use App\Models\OptionEnseignement;
use App\Models\SectionEnseignement;
use App\Models\TypeEnseignement;
use Illuminate\Http\Request;
use App\Models\TypeFormation;
use App\Models\Localite;
use App\Models\Structure;
use App\Models\Formation;
use App\Models\MenuVisite;
use App\Models\StructureInsertionPro;
use Illuminate\Support\Facades\DB;

class WebSiteController extends Controller
{
    //
    public function index()
    {
        return view('layouts.view');
    }

    public function enseignement()
    {
        $type_enseignements =  TypeEnseignement::all();
        $type_formation = TypeFormation::all();

        return view('enseignement/presentation', ['type_enseignements' => $type_enseignements, "type_formations" => $type_formation]);
    }

    public function showTypeEnseignement($code)
    {
        $type = TypeEnseignement::where('code', '=', $code)->firstorfail();
        return view('enseignement/types', ['type' => $type]);
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
        return view('formation/presentation', ["localites" => $localites, "structures" => $structures, "type" => $type, "formations" => $formations]);
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
        $option = OptionEnseignement::where('code', '=', $code)->firstorfail();
        return view('enseignement/parcours', ['option' => $option]);
    }

    public function formation()
    {
        return view('formation/view');
    }

    public function viewMenuStructure()
    {
        $menuStructure = MenuVisite::where('titre', "Structure d'aide")->firstorfail();
        $structures = StructureInsertionPro::all();
        return view('structure/view', ['menu' => $menuStructure, 'structures' => $structures]);
    }

    public function showMenuEtablissement()
    {
        //$ecoles = Ecole::all();
        $menu = MenuVisite::where('titre', "Etablissement")->firstorfail();
        $nbres = DB::select("SELECT COUNT(*) AS total, `regions`.libelle FROM `ecoles` INNER JOIN `localites` ON `ecoles`.localite_id=`localites`.id INNER JOIN `arrondissements` ON `localites`.arrondissement_id=`arrondissements`.id INNER JOIN `departements` ON `arrondissements`.departement_id=`departements`.id INNER JOIN `regions` ON `departements`.region_id=`regions`.id GROUP BY `regions`.id order by libelle asc ");
        return view('etablissement/view', ['nbres' => $nbres,"menu"=>$menu]);
    }

    public function showEcoleByRegion(Request $request)
    {
        $ecoles = DB::select("SELECT `ecoles`.id,`ecoles`.libelle, `ecoles`.cycle_1,`ecoles`.cycle_2, `type_ecoles`.libelle AS 'type' ,`localites`.libelle AS 'localite' FROM `ecoles` inner JOIN `type_ecoles` ON `ecoles`.type_ecole_id=`type_ecoles`.id  INNER JOIN `localites` ON `ecoles`.localite_id=`localites`.id INNER JOIN `arrondissements` ON `localites`.arrondissement_id=`arrondissements`.id INNER JOIN `departements` ON `arrondissements`.departement_id=`departements`.id INNER JOIN `regions` ON `departements`.region_id=`regions`.id  WHERE `regions`.libelle='$request->region' ORDER BY `ecoles`.libelle asc ");
        $json_data['data'] = $ecoles;
        return json_encode($json_data);
    }

    public function showEcole()
    {
        $ecoles = DB::select("SELECT `ecoles`.id,`ecoles`.libelle, `ecoles`.cycle_1,`ecoles`.cycle_2, `type_ecoles`.libelle AS 'type' ,`localites`.libelle AS 'localite' FROM `ecoles` inner JOIN `type_ecoles` ON `ecoles`.type_ecole_id=`type_ecoles`.id  INNER JOIN `localites` ON `ecoles`.localite_id=`localites`.id INNER JOIN `arrondissements` ON `localites`.arrondissement_id=`arrondissements`.id INNER JOIN `departements` ON `arrondissements`.departement_id=`departements`.id INNER JOIN `regions` ON `departements`.region_id=`regions`.id ORDER BY `ecoles`.libelle asc ");
        $json_data['data'] = $ecoles;
        return json_encode($json_data);
        //dd("Ecoles");
    }

    public function contact()
    {
        return view('contact');
    }

    public function teacher()
    {
        return view('teacher');
    }

    /** Rendu des sections pour chaque option d'enseignement */
    public function section($code)
    {
        $section = SectionEnseignement::findorFail(intval($code));
        $cycles = CycleEnseignement::all();
        return view('enseignement/section', ['section' => $section, 'cycles' => $cycles]);
        //dd($section);
    }


    public function filiere(Request $request)
    {
        $id_cycle = intval($request->cycle);
        $id_section = intval($request->section);

        $section = SectionEnseignement::findorFail($id_section);
        $cycle = CycleEnseignement::findorFail($id_cycle);

        $localites = Localite::all();

        $filieres = FiliereEnseignement::where('cycle_enseignement_id', $id_cycle)->where('section_enseignement_id', $id_section)->paginate(10);
        return view('filiere/view', ["section" => $section, "cycle" => $cycle, "filieres" => $filieres, "localites" => $localites]);
        //dd($filieres);
    }

    public function showFiliere(Request $request)
    {
        $filiere = FiliereEnseignement::find(intval($request->code));
        return view('filiere/detail', ["filiere" => $filiere]);
    }


    /** Enseignement */
    public function orientation()
    {
        return view('orientation/presentation');
    }
}
