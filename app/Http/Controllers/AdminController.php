<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $current = new Carbon();
        $results = [];
        array_push($results, DB::table('ecoles')->count());
        array_push($results, DB::table('localites')->count());
        array_push($results, DB::table('users')->count());
        return view('dashboard.admin.dash',['date' => $current, 'results' => $results]);
    }

    public function ecole(Request $request)
    {
        $current = new Carbon();
        return view('dashboard.admin.ecole', ['date' => $current]);
    }

    public function structure(Request $request)
    {
        $current = new Carbon();
        return view('dashboard.admin.structure', ['date' => $current]);
    }
}
