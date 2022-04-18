<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pathologie;
class SearchController extends Controller
{
    public function index()
    {
        return view('searchDemo');
    }
    
    
    public function autocomplete(Request $request)
    {
        $data = Pathologie::select('id','pathologie')
                    ->where('pathologie', 'LIKE', '%'. $request->get('query'). '%')
                    ->get();
     
        return response()->json($data);
    }

    public function getpathologyfunction(Request $request){

        return $request->input() ;

    }
}
