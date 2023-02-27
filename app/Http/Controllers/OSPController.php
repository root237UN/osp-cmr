<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
