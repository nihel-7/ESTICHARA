<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecresultController extends Controller
{
    function getData(Request $req){
        return $req->input('nom') ;
        }
}
