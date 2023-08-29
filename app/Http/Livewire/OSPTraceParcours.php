<?php

namespace App\Http\Livewire;

use Livewire\Component;
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

class OSPTraceParcours extends Component
{
    public $filiere,$filiere_id;
    public function render()
    {
        return view('livewire.o-s-p-trace-parcours');
    }

    public function mount(){
        $this->filiere_id = $this->filiere->id;
    }

    public function traceParcours()
    {
        $this->showToastr("Téléchargement encours ...",'info');

        $filiere = FiliereEnseignement::find(intval($this->filiere_id));
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
        return redirect()->route('orientation.path1.trace',['id'=>$this->filiere_id]);

        // $pdf = PDF::loadView('orientation.parcours.pdf_trace',[
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
        // dd($pdf->download('trace_pdf.pdf'));

        // dd($filiere,$section,$cycle,$option,$type,$enseignements,$ecoles,$competences,$debouches);
    }

    public function showToastr($message, $type)
    {
        return $this->dispatchBrowserEvent('showToastr',['type'=>$type, 'message'=>$message]);
    }
}
