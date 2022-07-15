<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    public function index(Request $requests)
    {
        $currentDate = new Carbon();
        return view('dashboard.admin.media',['date'=>$currentDate]);
    }
}
