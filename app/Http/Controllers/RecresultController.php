<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PathMedAssociation;
use App\Models\Sp_specialite;
use Illuminate\Support\Facades\DB;
class RecresultController extends Controller
{
    function getData(Request $req){
       // return $req->input('nomM') ;
       $medid=$req->input('nomM');
       $data = DB::table('spccl_specialite_classecl')
       ->where('SPCCL_CCL_CODE_FK_PK','=',$medid)
       ->join('sp_specialite','SPCCL_SP_CODE_FK_PK','=','SP_CODE_SQ_PK')
       ->select('SP_CODE_SQ_PK','SP_NOM','SP_NOMLONG')
       ->get();

       

       return view('user.recresult',['listmed'=>$data]);

        }
        public function show_info (Request $request)
        {
          return view('user.medicationdetail',['listmed'=>$data]); 
      
        }
}
