<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use App\Models\Abonne;
use App\Models\contentMenu;
use App\Models\Localite;
use App\Models\Formation;
use App\Models\Structure;
use App\Models\MenuVisite;
use App\Models\Reabonnement;
use Illuminate\Http\Request;
use App\Models\TypeFormation;
use App\Models\TypeEnseignement;
use App\Models\CycleEnseignement;
use App\Models\OptionEnseignement;
use App\Models\StructureFormation;
use Illuminate\Support\Facades\DB;
use App\Models\FiliereEnseignement;
use App\Models\SectionEnseignement;
use App\Models\StructureInsertionPro;

class WebSiteController extends Controller
{
    //
    public function index()
    {
        $content = MenuVisite::where('titre','accueil')->firstorfail();
        $subContent = $content->content()->get();
        return view('layouts.view',['content'=>$content,'subContent'=>$subContent]);
    }

    public function showMenuStructure()
    {
        $menuStructure = MenuVisite::where('titre', "Structure d'aide")->firstorfail();
        $structures = DB::select("SELECT * FROM `structure_insertion_pros` where (SELECT COUNT(*) FROM `programme_insertion_pros` where `structure_insertion_pros`.id=`programme_insertion_pros`.structure_insertion_pro_id ) >= 2 ");
        //dd($structures);
        return view('structure/view', ['menu' => $menuStructure, 'structures' => json_encode($structures)]);
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


    public function filiere(Request $request)
    {
        $id_cycle = intval($request->cycle);
        $id_section = intval($request->section);

        $section = SectionEnseignement::findorFail($id_section);
        $cycle = CycleEnseignement::findorFail($id_cycle);

        $localites = Localite::orderBy('libelle','asc')->get();
        $secteurs = SectionEnseignement::orderBy('libelle','asc')->get();
        $ecoles = Ecole::orderBy('libelle','asc')->get();

        $filieres = FiliereEnseignement::where('cycle_enseignement_id', $id_cycle)->where('section_enseignement_id', $id_section)->paginate(10);
        return view('filiere/view', [
            'ecoles'=>$ecoles,
            'secteurs'=>$secteurs,
            "section" => $section,
            "cycle" => $cycle,
            "filieres" => $filieres,
            "localites" => $localites,
            'id_cycle' =>$id_cycle,
            'id_section' => $id_section
        ]);
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

    public function test()
    {
        $abonnes = Abonne::all();
        $reabonnements = Reabonnement::all();
        dd(json_encode($reabonnements));
        return view('test', ['abonnes' => json_encode($abonnes)]) ;
    }
}
