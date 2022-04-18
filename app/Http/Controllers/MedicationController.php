<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pathologie;

class MedicationController extends Controller
{
    public function list(Request $request){
       // return view('user.list');
       echo"something here";
       return $request->input();
       
    }

    public function autocomplete (Request $request){
        /*$pathologies = DB::table('pathologies')
                     ->where('pathologie','LIKE' , '%{'.$request->terms.'}%')
                     ->get();
                     return response()->json($pathologies);*/
        
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('pathologies')
        ->where('pathologie', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '<li><a href="#">'.$row->name.'</a></li>';
       
       
      }
      $output .= '</ul>';
      echo $output;
     }

        


    }

    
}
