<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PathMedAssociation;
use App\Models\Sp_specialite;
use Illuminate\Support\Facades\DB;
class RecresultController extends Controller
{
    function getData(Request $req)
    {
       // return $req->input('nomM') ;
       $medid=$req->input('nomM');
       $data = DB::table('spccl_specialite_classecl')
       ->where('SPCCL_CCL_CODE_FK_PK','=',$medid)
       ->join('sp_specialite','SPCCL_SP_CODE_FK_PK','=','SP_CODE_SQ_PK')
       ->select('SP_CODE_SQ_PK','SP_NOM','SP_NOMLONG')
       ->get();
       return view('user.recresult',['listmed'=>$data]);
    }
    
    function test(Request $req){
       $etat=$req->input('etat');
       $age=$req->input('age');
       $ante=$req->input('antecedents');
       $allergie=$req->input('allergie');
       $med=$req->input('medicament');
       $list=$req->input('list');

       dd($req->all());


    }
    
    
    public function getDetail()
    {
      $meds =sp_specialite::get();
      return view('user.medicationdetail',compact('meds'));

    }
    public function show_info ($id)
    {
      $detail=sp_specialite::find($id);          
      return view('user.medicationdetail',compact('detail'));       
    }
}
