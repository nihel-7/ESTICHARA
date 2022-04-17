<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pathologie;

class MedicationController extends Controller
{
    public function list(){
       // return view('user.list');
       echo"something here";
       return Pathologie::all();
    }
}
