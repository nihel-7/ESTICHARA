<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recommandation;
use App\Models\Analyse;
use App\Models\Recherche;

class HistoriqueController extends Controller
{
    public function indexrec(){
        $listrec = Recommandation::all()->sortByDesc("created_at");

  return view('admin.historiquerec',['listrec' => $listrec]);
}
public function indexanalyse(){
    $listrec = Analyse::all()->sortByDesc("created_at");

return view('admin.historiqueanalyse',['listrec' => $listrec]);
}

}
