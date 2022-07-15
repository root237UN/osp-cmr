<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Metiers;
use Illuminate\Http\Request;

class OrientationController extends Controller
{
    //
    public $formations;
    public $globalTerms;
    public $results ;

    public function __construct()
    {
        $this->formations =  Formation::all();
        $this->globalTerms = [
            "Metiers"=>"job",
        ];
    }

    public function index()
    {
        return view('orientation/presentation',['formations'=>$this->formations]);
    }

    public function search(Request $request)
    {
        $term = $request->term;
        $globalTerm = $request->global;
        $filieres = [];
        if($globalTerm == 'job')
        {
            $results = Metiers::where('libelle','like','%'.$term.'%')
            // ->orwhere(function($query,$param = $term){
            //     $query->where('description','like','%'.$param.'%');
            // })
            ->orwhere('description','like','%'.$term.'%')
            ->get();

            foreach ($results as $metier) {
                array_push($filieres, $metier->filieres()->get());
            }

        }

        $metier = Metiers::find(38)->filieres()->get();
        dd($metier);
        dd($results,$filieres);
        return view('orientation/search',['formations'=>$this->formations,'term'=>$term,'results'=>$this->results]);
    }
}
