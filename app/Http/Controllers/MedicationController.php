<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pathologie;

class MedicationController extends Controller
{
    public function list(){
       // return view('user.list');
       echo"something here";
       $pathologies = array();
       $pathologies = DB::table('pathologies')
                    ->where('pathologie','LIKE','c%')
                    ->get();
       return $pathologies;
    }

    public function autocomplete (Request $request){
        $pathologies = DB::table('pathologies')
                     ->where('pathologie','LIKE' , '%{'.$request->terms.'}%')
                     ->get();
                     return response()->json($pathologies);


    }
}
