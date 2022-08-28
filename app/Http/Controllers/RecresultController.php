<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PathMedAssociation;
use App\Models\Sp_specialite;
use Illuminate\Support\Facades\DB;
class RecresultController extends Controller
{
    function getData(Request $req)
    { $catfp=0;
       // return $req->input('nomM') ;
       $etat=$req->input('etat');
       $age=$req->input('age');
       $ante=$req->input('antecedents');
       $allergie=$req->input('allergie');
       $med=$req->input('medicament');
       $medid=$req->input('nomM');
      
       /*$ci2 = DB::table('fcptsp_cipemg_spe')
        ->where('FCPTSP_SP_CODE_FK_PK','=',$medid)
        ->join('fcpttx1_cipemg_txci','FCPTSP_FCPT_CODE_FK_PK','=','FCPTTX1_FCPT_CODE_FK_PK')
        ->select('FCPTTX1_TXTCI')
        ->get();*/

       $data = DB::table('spccl_specialite_classecl')
       ->where('SPCCL_CCL_CODE_FK_PK','=',$medid)
       ->join('sp_specialite','SPCCL_SP_CODE_FK_PK','=','SP_CODE_SQ_PK')
       ->select('SP_CODE_SQ_PK','SP_NOM','SP_NOMLONG')
       ->get();

       if($etat) {
        if($etat=="femme qui allaite"){
          foreach($data as $key => $med){
            $cis = DB::table('fcpmsp_cipemg_spe')
           ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
           ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
           ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
           ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
           ->get();
              foreach($cis as $ci){
                if(str_contains($ci->FCPMTX_TEXTE, 'allaitement')){
                  unset($data[$key]);
                }
              }

          } }

       }
       if($etat) {
        if($etat=="femme enceinte"){
          foreach($data as $key => $med){
            $cis = DB::table('fcpmsp_cipemg_spe')
           ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
           ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
           ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
           ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
           ->get();
              foreach($cis as $ci){
                if(str_contains($ci->FCPMTX_TEXTE, 'grossesse')){
                  unset($data[$key]);
                }
              }

          } }

       }
       if($etat) {
        if($etat=="nouveau-né"){
          foreach($data as $key => $med){
            $cis = DB::table('fcpmsp_cipemg_spe')
           ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
           ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
           ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
           ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
           ->get();
              foreach($cis as $ci){
                if(str_contains($ci->FCPMTX_TEXTE, 'nouveau-né')){
                  unset($data[$key]);
                }
              }

          } }

       }
       if($etat) {
        if($etat=="nourrisson"){
          foreach($data as $key => $med){
            $cis = DB::table('fcpmsp_cipemg_spe')
           ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
           ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
           ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
           ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
           ->get();
              foreach($cis as $ci){
                if(str_contains($ci->FCPMTX_TEXTE, 'nourrisson')){
                  unset($data[$key]);
                }
              }

          } }

       }
       if($etat) {
        if($etat=="enfant"){
          foreach($data as $key => $med){
            $cis = DB::table('fcpmsp_cipemg_spe')
           ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
           ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
           ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
           ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
           ->get();
              foreach($cis as $ci){
                if(str_contains($ci->FCPMTX_TEXTE, 'enfant')){
                  unset($data[$key]);
                }
              }

          } }

       }
       if($etat) {
        if($etat=="femme ménopausée"){
          foreach($data as $key => $med){
            $cis = DB::table('fcpmsp_cipemg_spe')
           ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
           ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
           ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
           ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
           ->get();
              foreach($cis as $ci){
                if(str_contains($ci->FCPMTX_TEXTE, 'femme ménopausée')){
                  unset($data[$key]);
                }
              }

          } }

       }
       if($etat) {
        if($etat=="femme em age de procreer"){
          $catfp=1;

       }
       return view('user.recresult',['listmed'=>$data,'catfp'=>$catfp]);
       //dd($data->all());
       //return $etat;
    }
  }
    
    
  
  
  
  
  function test(Request $req){
       $etat=$req->input('etat');
       $age=$req->input('age');
       $ante=$req->input('antecedents');
       $allergie=$req->input('allergie');
       $med=$req->input('medicament');
       

       dd($req->all());


    }
    
    
   /* public function getDetail()
    {
      $meds =sp_specialite::get();
      return view('user.medicationdetail',compact('meds'));

    }
    public function show_info ($id)
    {
      $detail=sp_specialite::find($id);          
      return view('user.medicationdetail',compact('detail'));       
    }*/
}
