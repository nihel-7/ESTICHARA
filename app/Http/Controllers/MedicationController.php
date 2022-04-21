<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sp_specialite;

class MedicationController extends Controller
{
    public function list(Request $request){
       // return view('user.list');
       echo"something here";
       return $request->input();
       
    }

    public function autocompleteM (Request $request){
      $data = Sp_specialite::select('SP_CODE_SQ_PK','SP_NOM')
      ->where('SP_NOM', 'LIKE', '%'. $request->get('query'). '%')
      ->limit(5)
      ->get();

return response()->json($data);
    }

    
}
