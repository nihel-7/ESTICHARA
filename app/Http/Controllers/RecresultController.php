<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PathMedAssociation;
use App\Models\Sp_specialite;
use App\Models\Recommandation;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
class RecresultController extends Controller
{
    function getData(Request $req)
    { $catfp=0;
      $cias=0;
       // return $req->input('nomM') ;
       $etat=$req->input('etat');
       $age=$req->input('age');
       $ante=$req->input('antecedents');
       $allergie=$req->input('allergie');
       $medi=$req->input('medicament');
       $pathid=$req->input('nomM');
      
       /*$ci2 = DB::table('fcptsp_cipemg_spe')
        ->where('FCPTSP_SP_CODE_FK_PK','=',$medid)
        ->join('fcpttx1_cipemg_txci','FCPTSP_FCPT_CODE_FK_PK','=','FCPTTX1_FCPT_CODE_FK_PK')
        ->select('FCPTTX1_TXTCI')
        ->get();*/

       $data = DB::table('spccl_specialite_classecl') //list de medicaments adequats pour la pathologie 
       ->where('SPCCL_CCL_CODE_FK_PK','=',$pathid)
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
          foreach($data as $key => $med){
           $cias = DB::table('nivcom_niveau_commentaire') // liste des contre indications du medicaments
            ->where('NIVCOM_CDF_COM_CODE_FK_PK','=','X9')
            ->join('fcpmsp_cipemg_spe','FCPMSP_FCPM_CODE_FK_PK','=','NIVCOM_FCPM_CODE_FK_PK')
            ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
            ->join('cdf_codif','CDF_CODE_PK','=','NIVCOM_CDF_TER_CODE_FK_PK')
            ->select('CDF_CODE_PK','CDF_NOM','FCPMSP_SP_CODE_FK_PK')
            ->get();
            $ciasA = DB::table('tercom_terrain_commentaire') //liste des allergie du medicament
            ->where('TERCOM_NATURE_CIPEMG_FK_PK','=','C')
            ->join('fcpmsp_cipemg_spe','FCPMSP_FCPM_CODE_FK_PK','=','TERCOM_FCPM_CODE_FK_PK')
            ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
            ->join('cdf_codif','CDF_CODE_PK','=','TERCOM_CDF_COM_CODE_FK_PK')
            ->select('CDF_CODE_PK','CDF_NOM','FCPMSP_SP_CODE_FK_PK')
            ->get();
            if($allergie){ // tester par rappor aux allergies du patients
            foreach($ciasA as $ciaA){
              if($ciaA->CDF_NOM == $allergie){
                unset($data[$key]);
              }
            }}
            if($ante){
              foreach($cias as $cia){
                if($cia->CDF_NOM == $ante){
                  unset($data[$key]);
                }
              }
            }

          }
      /*if($ante){
        foreach($data as $key => $med){
          $cis = DB::table('fcpmsp_cipemg_spe')
         ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
         ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
         ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
         ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
         ->get();
            foreach($cis as $ci){
              if(str_contains($ci->FCPMTX_TEXTE, $ante)){
                unset($data[$key]);
              }
            }

        } }

        if($allergie){
          foreach($data as $key => $med){
            $cis = DB::table('fcpmsp_cipemg_spe')
           ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
           ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
           ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
           ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
           ->get();
              foreach($cis as $ci){
                if(str_contains($ci->FCPMTX_TEXTE, $allergie)){
                  unset($data[$key]);
                }
              }
  
          } }

          if($medi){
            foreach($data as $key => $med){
              $cis = DB::table('fcpmsp_cipemg_spe')
             ->where('FCPMSP_SP_CODE_FK_PK','=',$med->SP_CODE_SQ_PK)
             ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
             ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
             ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
             ->get();
                foreach($cis as $ci){
                  if(str_contains($ci->FCPMTX_TEXTE, $medi)){
                    unset($data[$key]);
                  }
                }
    
            } }*/

          
       
       
          if($etat) {
        if($etat=="femme em age de procreer"){
          $catfp=1;

       }}

       $recommandation = new Recommandation();
       $recommandation->utilisateur = $req->input('user');
       $recommandation->pathologie = $req->input('nom');
       $recommandation->allergie = $allergie;
       $recommandation->antecedent = $ante;
       $recommandation->resultat = $etat;
       $recommandation->save();

       //dd($ciasA->all());
       //dd($cias->all());
        if(Auth::user()->role==1){
       return view('pharmacien.recresult',['listmed'=>$data,'catfp'=>$catfp]);}
       else{
        return view('user.recresult',['listmed'=>$data,'catfp'=>$catfp]);
       }
       //dd($cias->all());
       //return $etat;
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
