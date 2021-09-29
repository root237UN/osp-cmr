<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondaryController extends Controller
{
    //Controller pour les elements secondaires Structures Etablissements Contact Autres

    public function presentationStructure(Request $request)
    {
        return view('structure/presentation');
    }
}
