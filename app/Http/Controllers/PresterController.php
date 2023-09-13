<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresterController extends Controller
{
    public function index(){
        return view('pages.dashboard.prester.index');
    }
}
