<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergie;
class AllergieController extends Controller
{
    public function autocompleteA(Request $request)
    {
        $data = Allergie::select('id','allergie')
                    ->where('allergie', 'LIKE', '%'. $request->get('query'). '%')
                    ->get();
     
        return response()->json($data);
    }

}
