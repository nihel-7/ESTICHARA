<?php
//-----------khasni nsegemha 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pathologie;
use Illuminate\Support\Facades\DB;


class PathologyController extends Controller
{
<<<<<<< Updated upstream
    /*public function autocomplete (){
        $result = array();
        $sp1 = DB::table('ccl_classeclinique')
              ->where('ccl_classeclinique.CCL_NOM','LIKE' , '%' . $_POST['phrase'] . '%')
              ->limit(15)     
              ->get();
          $result =  $sp1; 
          return response()->json($result);
    }
   
   
    public function autocomple (Request $rquest){
        $data = CCL_NOM::select("CCL_NOM")
                        ->where("CCL_NOM","LIKE","%{$request->terms}%")
                        ->get();
                
                        return response()->json($data);
    }*/
    public function getpathologie (Request $request)
   {
     $name=$request->get('name');
     $fieldName =$request->get('fieldName');

     $name = strtolower(trim($name));
     if(empty($fieldName))
     {
        $fieldName = 'name';
     }
     $patho = DB::table('ccl_classeclinique')
     ->select('CCL_NOM', 'CCL_CODE_SQ_PK')->where(`LOWER(`.$fieldName.`)`,'LIKE',"$name%")
     ->limit(25)
     ->get();
     return $patho;

   }
    public function autocompletepatho (Request $request){
      $data = Ccl_classeclinique::select('CCL_CODE_SQ_PK','CCL_NOM')
      ->where('CCL_NOM', 'LIKE', '%'. $request->get('query'). '%')
      
      ->get();

return response()->json($data);
    }

    function index ()
    {
        return view('user.therapeuticrec');
    }
    function action ($Request request)
    {
        $nom=request()->input('nom');
        
        $noms=pathologie::where('CCL_NOM','like',"%$nom%");
        return $noms->get();
    }

    
    public function action(Request $request)
    {
        $data = $request->all();
        $query = $data['query'];
        $filter_data =Ccl_classeclinique::select('CCL_NOM')
                                        ->where('CCL_NOM','LIKE','%'.$query.'%')
                                        ->get();

        return response()->json($filter_data);
                                        
    }

}

