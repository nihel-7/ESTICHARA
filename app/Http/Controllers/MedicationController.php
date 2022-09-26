<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sp_specialite;
use Illuminate\Support\Facades\Auth;

class MedicationController extends Controller
{
    public function list(Request $request){
       // return view('user.list');
       echo"something here";
       return $request->input('search');
       
    }

    public function autocompleteM (Request $request){
      $data = Sp_specialite::select('SP_CODE_SQ_PK','SP_NOM')
      ->where('SP_NOM', 'LIKE', '%'. $request->get('query'). '%')
      ->limit(7)
      ->get();

return response()->json($data);
    }
//////pour la forme
    public function autocompleteMF (Request $request){
        $data = DB::table('sp_specialite')
        
        ->where('SP_NOM', 'LIKE', '%'. $request->get('query'). '%')
        ->join('spfotx_spe_forme_texte', 'SP_CODE_SQ_PK', '=', 'SPFOTX_SP_CODE_FK_PK')
        ->select('SP_NOM', 'SP_CODE_SQ_PK', 'SPFOTX_TEXTE')
        ->limit(25)
        ->get();
  
  return response()->json($data);
      }
      
      public function MedInfo($id,$cat){


        $cats=0;
        $med = DB::table('sp_specialite')
        ->where('SP_CODE_SQ_PK','=',$id)
        ->select('SP_NOMLONG','SP_CODE_SQ_PK')
        ->first();
        $edu= DB::table('educations')
        ->where('id','=',$id)
        ->select('edu_text')
        ->first();
        

        $ei = DB::table('feisp_effindspe')
        ->where('FEISP_SP_CODE_FK_PK','=',$id)
        ->join('feitx1_ei_txdosether','FEITX1_FEI_CODE_FK_PK','=','FEISP_FEI_CODE_FK_PK')
        ->select('FEITX1_TEXTE')
        ->distinct()
        ->get();

        $ci = DB::table('fcpmsp_cipemg_spe')
        ->where('FCPMSP_SP_CODE_FK_PK','=',$id)
        ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
        ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
        ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
        ->distinct()
        ->get();
        //$ciu = array_unique($ci);


        $ci2 = DB::table('fcptsp_cipemg_spe')
        ->where('FCPTSP_SP_CODE_FK_PK','=',$id)
        ->join('fcpttx1_cipemg_txci','FCPTSP_FCPT_CODE_FK_PK','=','FCPTTX1_FCPT_CODE_FK_PK')
        ->select('FCPTTX1_TXTCI')
        ->distinct()
        ->get();
         
        $rec = DB::table('fcpmsp_cipemg_spe')
        ->where('FCPMSP_SP_CODE_FK_PK','=',$id)
        ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
        ->where('FCPMTX_NATURECIPEMG_FK_PK','=','P')
        ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_CDF_TER_CODE_FK_PK')
        ->distinct()
        ->get();

        /*$pos = DB::table('spatr_spec_avistransparence')
        ->where('SPATR_SP_CODE_FK_PK','=',$id)
        ->join('atr_aviscommissiontransparence','ATR_CODE_SQ_PK','=','SPATR_ATR_CODE_FK_PK')
        ->select('ATR_TEXTE','ATR_CODE_SQ_PK')
        ->first();*/
        $pos = DB::table('fpo_ficheposo')
        ->join('fposp_poso_spe','FPOSP_FPO_CODE_FK_PK','=','FPO_CODE_SQ_PK')
        ->where('FPOSP_SP_CODE_FK_PK','=',$id)
        ->select('FPO_TEXTE','FPOSP_SP_CODE_FK_PK')
        ->distinct()
        ->get();


        if($cat){
            $cat= DB::table('fgasp_gralspe')
            ->where('FGASP_SP_CODE_FK_PK','=',$id)
            ->join('fgatx9_fga_txrecommandat','FGATX9_FGA_CODE_FK_PK','=','FGASP_FGA_CODE_FK_PK')
            ->select('FGATX9_TEXTE')
            ->first();
            if($cat){
            if(str_contains($cat->FGATX9_TEXTE, 'en âge')){
                $cats=$cat ;
              }}
        }
        //return $edu;
        //return $ci;
         if(Auth::user()->role==1){
            return view('pharmacien.medicationdetail',['cis'=>$ci,'recs'=>$rec,'med'=>$med,'cis2'=>$ci2,'eis'=>$ei,'pos'=>$pos,'cat'=>$cats,'edu'=>$edu]);
        }else{
          return view('user.medicationdetail',['cis'=>$ci,'recs'=>$rec,'med'=>$med,'cis2'=>$ci2,'eis'=>$ei,'pos'=>$pos,'cat'=>$cats,'edu'=>$edu]);
        }
         
            

          
        }
        
       public function MedinfoLight(Request $req){
        $id=$req->input('codeM');
        $cats=0;
        $med = DB::table('sp_specialite')
        ->where('SP_CODE_SQ_PK','=',$id)
        ->select('SP_NOMLONG','SP_CODE_SQ_PK')
        ->first();
        
        
        $ei = DB::table('feisp_effindspe')
        ->where('FEISP_SP_CODE_FK_PK','=',$id)
        ->join('feitx1_ei_txdosether','FEITX1_FEI_CODE_FK_PK','=','FEISP_FEI_CODE_FK_PK')
        ->select('FEITX1_TEXTE')
        ->distinct()
        ->get();

        $ci = DB::table('fcpmsp_cipemg_spe')
        ->where('FCPMSP_SP_CODE_FK_PK','=',$id)
        ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
        ->where('FCPMTX_NATURECIPEMG_FK_PK','=','C')
        ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_FCPM_CODE_FK_PK')
        ->distinct()
        ->get();
       // $ciu = array_unique($ci);

        $ci2 = DB::table('fcptsp_cipemg_spe')
        ->where('FCPTSP_SP_CODE_FK_PK','=',$id)
        ->join('fcpttx1_cipemg_txci','FCPTSP_FCPT_CODE_FK_PK','=','FCPTTX1_FCPT_CODE_FK_PK')
        ->select('FCPTTX1_TXTCI')
        ->distinct()
        ->get();
         
        $rec = DB::table('fcpmsp_cipemg_spe')
        ->where('FCPMSP_SP_CODE_FK_PK','=',$id)
        ->join('fcpmtx_fichecipemg_texte','FCPMSP_FCPM_CODE_FK_PK','=','FCPMTX_FCPM_CODE_FK_PK')
        ->where('FCPMTX_NATURECIPEMG_FK_PK','=','P')
        ->select('FCPMTX_TEXTE','FCPMTX_NATURECIPEMG_FK_PK','FCPMTX_CDF_TER_CODE_FK_PK')
        ->distinct()
        ->get();

       /* $pos = DB::table('spatr_spec_avistransparence')
        ->where('SPATR_SP_CODE_FK_PK','=',$id)
        ->join('atr_aviscommissiontransparence','ATR_CODE_SQ_PK','=','SPATR_ATR_CODE_FK_PK')
        ->select('ATR_TEXTE','ATR_CODE_SQ_PK')
        ->first();*/
        $pos = DB::table('fpo_ficheposo')
        ->join('fposp_poso_spe','FPOSP_FPO_CODE_FK_PK','=','FPO_CODE_SQ_PK')
        ->where('FPOSP_SP_CODE_FK_PK','=',$id)
        ->select('FPO_TEXTE','FPOSP_SP_CODE_FK_PK')
        ->distinct()
        ->get();

        
            $cat= DB::table('fgasp_gralspe')
            ->where('FGASP_SP_CODE_FK_PK','=',$id)
            ->join('fgatx9_fga_txrecommandat','FGATX9_FGA_CODE_FK_PK','=','FGASP_FGA_CODE_FK_PK')
            ->select('FGATX9_TEXTE')
            ->first();
            if($cat){
            if(str_contains($cat->FGATX9_TEXTE, 'en âge')){
                $cats=$cat ;
              }}
        
              //return $ci;
         if(Auth::user()->role==0){
            return view('pharmacien.medicationdetail',['cis'=>$ci,'recs'=>$rec,'med'=>$med,'cis2'=>$ci2,'eis'=>$ei,'pos'=>$pos,'cat'=>$cats]);
        }else{
          return view('user.medicationdetail',['cis'=>$ci,'recs'=>$rec,'med'=>$med,'cis2'=>$ci2,'eis'=>$ei,'pos'=>$pos,'cat'=>$cats]);
        }

        dd($req->all());

       }
        

        
      }
  

