<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergie;
use Illuminate\Support\Facades\DB;
class AllergieController extends Controller
{
    public function autocompleteA(Request $request)
    {
        $data = Allergie::select('CDF_CODE_PK','CDF_NOM','CDF_TEXTE')
                    ->where('CDF_NOM', 'LIKE', '%'. $request->get('query'). '%')
                    ->get();
     
        return response()->json($data);
    }

    public function getallergiefunction(Request $req){

        $allergie =  DB::table('allergie')
        ->where('CDF_CODE_PK','=',$req->input('codeA'))
        ->update(['CDF_TEXTE' => $req->input('description') ]);
            
            
        return view('admin.RechercheAllergie')

        ->with('success','Allergie modifiee avec succes!');

    }

}
