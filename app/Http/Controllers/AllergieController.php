<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergie;
class AllergieController extends Controller
{
    public function autocompleteA(Request $request)
    {
        $data = Allergie::select('CDF_CODE_PK','CDF_NOM')
                    ->where('CDF_NOM', 'LIKE', '%'. $request->get('query'). '%')
                    ->get();
     
        return response()->json($data);
    }

}
