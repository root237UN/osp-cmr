<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuVisite;
use Illuminate\Support\Facades\DB;

class EtablissementController extends Controller
{
    //

    public function index()
    {
        //$ecoles = Ecole::all();
        $menu = MenuVisite::where('titre', "Etablissement")->firstorfail();
        // dd("    SELECT COUNT(*) AS total, `regions`.`libelle`  FROM `regions` INNER JOIN `departements` ON `departements`.region_id=`regions`.id INNER JOIN `arrondissements` ON `arrondissements`.departement_id=`departements`.id INNER JOIN `localites`ON `localites`.arrondissement_id=`arrondissements`.id INNER JOIN `ecoles` ON `ecoles`.localite_id=`localites`.id GROUP BY `regions`.id order by `regions`.libelle asc");
        $nbres = DB::select("SELECT COUNT(*) AS total, `regions`.`libelle`  FROM `regions` INNER JOIN `departements` ON `departements`.region_id=`regions`.id INNER JOIN `arrondissements` ON `arrondissements`.departement_id=`departements`.id INNER JOIN `localites`ON `localites`.arrondissement_id=`arrondissements`.id INNER JOIN `ecoles` ON `ecoles`.localite_id=`localites`.id GROUP BY `regions`.id order by `regions`.libelle asc");
        return view('etablissement/view', ['nbres' => $nbres,"menu"=>$menu]);
    }


    public function ecolePro(Request $request)
    {
        $menu = MenuVisite::where('titre', "ecoles professionnelles")->firstorfail();
        return view('etablissement/view', ['nbres' => [],"menu"=>$menu]);
    }
}
