<?php

namespace App\Http\Controllers;

use App\Models\CompetenceProfessionnelle;
use App\Models\CycleEnseignement;
use App\Models\Ecole;
use App\Models\FiliereEnseignement;
use App\Models\OptionEnseignement;
use App\Models\SectionEnseignement;
use App\Models\TypeEnseignement;
use App\Models\TypeFormation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class OSPController extends Controller
{
    //

    public function metier()
    {
        return view("osp.pages.orientation.metier");
    }

    public function ecole()
    {
        return view("osp.pages.orientation.ecole");
    }

    public function formation()
    {
        return view("osp.pages.orientation.formation");
    }

    public function path_1(Request $request)
    {
        session(['cycle' => '1']);
        $type_enseignements = TypeEnseignement::all();
        $type_formations = TypeFormation::all();
        return view("orientation.path.path_1", ["type_enseignements" => $type_enseignements, "type_formations" => $type_formations]);
    }

    public function path_2()
    {
        return view("orientation.path.path_2");
    }

    public function parcours(Request $request, $code)
    {
        $type = TypeEnseignement::where('code', $code)->firstorfail();
        $options = OptionEnseignement::whereBelongsTo($type)->get();

        // dd($options,$type);
        return view("orientation.parcours.parcours", ["type" => $type, "options" => $options]);
    }

    public function options(Request $request, $code)
    {
        $option = OptionEnseignement::where('code', $code)->firstorfail();
        $sections = SectionEnseignement::whereBelongsTo($option)->get();
        return view("orientation.parcours.option", ["option" => $option, "sections" => $sections]);
    }

    public function orientation(Request $request, $libelle)
    {
        $section = SectionEnseignement::where('libelle', 'like', '%' . $libelle . '%')->firstorfail();
        $cycle = CycleEnseignement::where('libelle', 'like', '%' . session()->get('cycle') . '%')->firstorfail();
        // $filieres = FiliereEnseignement::where('cycle_enseignement_id', $cycle->id)->where('section_enseignement_id', $section->id)->paginate(10);
        return view("orientation.parcours.end", [
            "section" => $section, "cycle" => $cycle,
            'id_cycle' => $cycle->id,
            'id_section' => $section->id
        ]);
    }

    public function trace(Request $request)
    {
        $filiere = FiliereEnseignement::find(intval($request->id));
        $section = $filiere->SectionEnseignement()->firstorfail();
        $option = OptionEnseignement::find(intval($section->option_enseignement_id));
        $type = $option->TypeEnseignement()->firstorfail();

        $cycle = $filiere->CycleEnseignement()->firstorfail();
        $enseignements = $filiere->Enseignements()->get();
        $competences = $filiere->Competences()->get();

        $ecoles = DB::select("SELECT `ecoles`.libelle, `localites`.libelle AS localite FROM `localites` INNER JOIN  `ecoles` ON `localites`.id=`ecoles`.localite_id INNER JOIN `filiere_enseignement_ecole` ON `filiere_enseignement_ecole`.ecole_id=`ecoles`.id INNER JOIN `filiere_enseignements` ON `filiere_enseignements`.id=`filiere_enseignement_ecole`.filiere_enseignement_id WHERE `filiere_enseignements`.id=$filiere->id");
        $debouches = DB::select("SELECT `debouches`.libelle,`debouches`.description  FROM `debouches` INNER JOIN `debouches_filiere_enseignement` ON `debouches_filiere_enseignement`.debouches_id=`debouches`.id INNER JOIN `filiere_enseignements` ON `filiere_enseignements`.id=`debouches_filiere_enseignement`.filiere_enseignement_id WHERE `filiere_enseignements`.id=$filiere->id");
        // $competences= DB::select("SELECT `ecoles`.libelle FROM `ecoles` INNER JOIN `filiere_enseignement_ecole` ON `filiere_enseignement_ecole`.ecole_id=`ecoles`.id INNER JOIN `filiere_enseignements` ON `filiere_enseignements`.id=`filiere_enseignement_ecole`.filiere_enseignement_id WHERE `filiere_enseignements`.id=$filiere->id");
        // "Ecole::whereBelongsTo($filiere)->get();
        // dd($ecoles);
        // return view('orientation.parcours.pdf_trace', [
        //     "filiere" => $filiere,
        //     "section" => $section,
        //     "option" => $option,
        //     "type" => $type,
        //     "cycle" => $cycle,
        //     "enseignements" => $enseignements,
        //     "competences" => $competences,
        //     "ecoles" => $ecoles,
        //     "debouches" => $debouches
        // ]);
        // $this->showToastr("Téléchargement encours ...",'success');

        $pdf = PDF::loadView('orientation.parcours.pdf_trace',[
            "filiere" => $filiere,
            "section" => $section,
            "option" => $option,
            "type" => $type,
            "cycle" => $cycle,
            "enseignements" => $enseignements,
            "competences" => $competences,
            "ecoles" => $ecoles,
            "debouches" => $debouches
        ]);
        return $pdf->download('trace_pdf.pdf');

        // dd($filiere,$section,$cycle,$option,$type,$enseignements,$ecoles,$competences,$debouches);
    }

    public function showToastr($message, $type)
    {
        return $this->dispatchBrowserEvent('showToastr',['type'=>$type, 'message'=>$message]);
    }
}
