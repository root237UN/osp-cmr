<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.dash');
    }

    public function ecole(Request $request)
    {
        return view('dashboard.admin.ecole');
    }

    public function structure(Request $request)
    {
        return view('dashboard.admin.ecole');
    }
}
