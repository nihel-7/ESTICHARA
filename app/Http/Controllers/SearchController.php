<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pathologie;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    public function index()
    {
        return view('searchDemo');
    }
    
    
    public function autocomplete(Request $request)
    {
        $data = Pathologie::select('CCL_CODE_SQ_PK','CCL_NOM','Description')
                    ->where('CCL_NOM', 'LIKE', '%'. $request->get('query'). '%')
                    ->get();
     
        return response()->json($data);
    }

    public function getpathologyfunction(Request $req){

        $patho =  DB::table('ccl_classeclinique')
        ->where('CCL_CODE_SQ_PK','=',$req->input('codeP'))
        ->update(['Description' => $req->input('description') ]);
            
            
        return view('admin.RecherchePathologie')

        ->with('success','Pathologie modifiee avec succes!');

    }
}
