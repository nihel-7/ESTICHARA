<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyseController extends Controller
{
    public function analyse(Request $req){

        dd($req->all());
    }
}
