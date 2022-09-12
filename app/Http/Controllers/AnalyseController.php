<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AnalyseController extends Controller
{
    
    protected function getDCIS($dci_code) {
        $dci ="";
        $resultats = DB::table('cosac_compo_subact')
            ->join('sac_subactive as t0','t0.SAC_CODE_SQ_PK' , 'cosac_compo_subact.cosac_sac_code_fk_pk')
            ->select('t0.sac_nom','cosac_compo_subact.cosac_dosage','cosac_compo_subact.cosac_unitedosage')
            ->where('cosac_compo_subact.cosac_sp_code_fk_pk' , $dci_code)
            ->get();
        
        foreach ($resultats as $keys => $resultat) 
            $dci.=$resultat->sac_nom." ". $resultat->cosac_dosage .$resultat->cosac_unitedosage.( ($keys == (count($resultats)-1)) ? '.' : '/' ); 
        
        return $dci;
    }
    protected function getFicheInteraction($idinters) {
        //resortir la fiche interaction pour chaque niveau d'interaction 
        $fiche = DB::select("select   
                            fit_texte as nofit
                            from 
                            fit_ficheinterac
                            where    
                            fit_code_sq_pk in (?)
                            order by 
                            fit_code_sq_pk",[$idinters]);
        return $fiche;
    }

    protected function getMecanisme($idinters) {
        $tab=array();
        //resortir la fiche interaction pour chaque niveau d'interaction 
        $mecanisme = DB::select("select  
            t1.fitty_fit_code_fk_pk         as nofic ,    
            t2.cdf_nom                      as info_01

            from   fitty_typeinteraction          t1,               
                   cdf_codif                      t2                
            where  t1.fitty_fit_code_fk_pk       in (?)  
            and    t1.fitty_cdf_type_code_fk_pk  = t2.cdf_code_pk   
            and    t2.cdf_numero_pk              = 'IY'     ",[$idinters]);

        foreach ($mecanisme as $val) {
            $tab[] = $val->info_01;
        }
        $mecanismes=implode(',', $tab);
    return $mecanismes;
    }
    protected function interaction_sp_medicamenteuse( $med_sp_id , $med_sp_id_next , $nomM , $nomi ) 
    {
        $results = DB::select("select 
                    t1.it1sp_fit_code_fk_pk as idinter, 
                    t5.cdf_nom as valide, 
                    case when t1.it1sp_sp_code_fk_pk < t2.it2sp_sp_code_fk_pk then t6.sp_nom else t7.sp_nom end as terme_1 , 
                    case when t1.it1sp_sp_code_fk_pk < t2.it2sp_sp_code_fk_pk then t7.sp_nom else t6.sp_nom end as terme_2 , 
                    case when t1.it1sp_sp_code_fk_pk < t2.it2sp_sp_code_fk_pk then t1.it1sp_sp_code_fk_pk else t2.it2sp_sp_code_fk_pk end as id_t1 , 
                    case when t1.it1sp_sp_code_fk_pk < t2.it2sp_sp_code_fk_pk then t2.it2sp_sp_code_fk_pk else t1.it1sp_sp_code_fk_pk end as id_t2 , 
                    t3.fitna_cdf_nait_code_fk_pk as niveau 
                from 
                    it1sp_terme1specialite t1, 
                    it2sp_terme2specialite t2, 
                    fitna_interaction_nature t3, 
                    fitva_niveau_validation t4, 
                    cdf_codif t5, sp_specialite t6, 
                    sp_specialite t7 
                WHERE 
                    t1.it1sp_fit_code_fk_pk = t2.it2sp_fit_code_fk_pk 
                    and t3.fitna_fit_code_fk_pk = t1.it1sp_fit_code_fk_pk 
                    and t4.fitva_fit_code_fk_pk = t1.it1sp_fit_code_fk_pk 
                    and t5.cdf_code_pk = t4.fitva_cdf_vait_code_fk_pk 
                    and t6.sp_code_sq_pk = t1.it1sp_sp_code_fk_pk 
                    and t7.sp_code_sq_pk = t2.it2sp_sp_code_fk_pk 
                    and t4.fitva_cdf_vait_code_fk_pk = '1' 
                    and t5.cdf_numero_pk = 'IV' 
                    and t1.it1sp_sp_code_fk_pk <> t2.it2sp_sp_code_fk_pk 
                    and t1.it1sp_sp_code_fk_pk in (?) 
                    and t2.it2sp_sp_code_fk_pk in (?) 
                    and t3.fitna_cdf_nait_code_fk_pk <= 4
                    and exists 
                    ( 
                    select 
                        it1sp_fit_code_fk_pk , 
                        it1sp_sp_code_fk_pk 
                    from 
                        it1sp_terme1specialite 
                    where 
                        t2.it2sp_sp_code_fk_pk = it1sp_sp_code_fk_pk and 
                        t1.it1sp_fit_code_fk_pk = it1sp_fit_code_fk_pk )     
                    group by 
                        t1.it1sp_fit_code_fk_pk, 
                        t5.cdf_nom, 
                        case when t1.it1sp_sp_code_fk_pk < t2.it2sp_sp_code_fk_pk then t6.sp_nom else t7.sp_nom end , 
                        case when t1.it1sp_sp_code_fk_pk < t2.it2sp_sp_code_fk_pk then t7.sp_nom else t6.sp_nom end , 
                        case when t1.it1sp_sp_code_fk_pk < t2.it2sp_sp_code_fk_pk then t1.it1sp_sp_code_fk_pk else t2.it2sp_sp_code_fk_pk end , 
                        case when t1.it1sp_sp_code_fk_pk < t2.it2sp_sp_code_fk_pk then t2.it2sp_sp_code_fk_pk else t1.it1sp_sp_code_fk_pk end , 
                        t3.fitna_cdf_nait_code_fk_pk 
                    union 
                    select 
                        t1.it1sp_fit_code_fk_pk as idinter , 
                        t5.cdf_nom as valide , 
                        t6.sp_nom as terme_1 , 
                        t7.sp_nom as terme_2 , 
                        t1.it1sp_sp_code_fk_pk as id_t1 , 
                        t2.it2sp_sp_code_fk_pk as id_t2 , 
                        t3.fitna_cdf_nait_code_fk_pk as niveau 
                    from 
                        it1sp_terme1specialite t1, 
                        it2sp_terme2specialite t2, 
                        fitna_interaction_nature t3, 
                        fitva_niveau_validation t4, 
                        cdf_codif t5, 
                        sp_specialite t6, 
                        sp_specialite t7 
                    WHERE 
                        t1.it1sp_fit_code_fk_pk = t2.it2sp_fit_code_fk_pk and 
                        t3.fitna_fit_code_fk_pk = t1.it1sp_fit_code_fk_pk and 
                        t4.fitva_fit_code_fk_pk = t1.it1sp_fit_code_fk_pk and 
                        t5.cdf_code_pk = t4.fitva_cdf_vait_code_fk_pk and 
                        t6.sp_code_sq_pk = t1.it1sp_sp_code_fk_pk and 
                        t7.sp_code_sq_pk = t2.it2sp_sp_code_fk_pk and 
                        t4.fitva_cdf_vait_code_fk_pk = '1' and 
                        t5.cdf_numero_pk = 'IV' and 
                        t1.it1sp_sp_code_fk_pk <> t2.it2sp_sp_code_fk_pk and 
                        t1.it1sp_sp_code_fk_pk in (?) and 
                        t2.it2sp_sp_code_fk_pk in (?) and 
                        t3.fitna_cdf_nait_code_fk_pk <= 4 and 
                        not exists ( 
                        select 
                            it1sp_fit_code_fk_pk , 
                            it1sp_sp_code_fk_pk from it1sp_terme1specialite 
                        where 
                            t2.it2sp_sp_code_fk_pk = it1sp_sp_code_fk_pk and 
                            t1.it1sp_fit_code_fk_pk = it1sp_fit_code_fk_pk ) 
                    order by 1", [$med_sp_id,$med_sp_id_next,$med_sp_id,$med_sp_id_next]);

        if (count($results) > 0) 
        {
            $terme_2 = $this->getDCIS($med_sp_id_next);
            foreach ($results as $result) 
            {
                $fiche  = $this->getFicheInteraction($result->idinter);
                $mecanisme = $this->getMecanisme($result->idinter);

                $i_array = array(
                    "item_sac_1" => $med_sp_id,
                    "item_sac_2" => $terme_2,
                    "nomM"=>$nomM,
                    "comment" => "Interaction medicamenteuse: ",
                    "nomi"=>$nomi,
                    "niveau_inter" => $result->niveau,
                    "mecanisme"         => $mecanisme,
                    "fiche_interaction" => $fiche[0]->nofit);
            }
            return $i_array;
        }
    }

    protected function allergies ($med_sp ,$ficheid) 
   {
        $result =  DB::select(" select distinct(t2.TERCOM_CDF_COM_CODE_FK_PK) as code_comment_terrain
                                                     from fcpmsp_cipemg_spe t1 , tercom_terrain_commentaire t2 , nivcom_niveau_commentaire t4
                                                    where
                                                    t2.TERCOM_FCPM_CODE_FK_PK = t4.NIVCOM_FCPM_CODE_FK_PK
                                                    and
                                                    t4.NIVCOM_CDF_COM_CODE_FK_PK='X9'
                                                    and
                                                    t1.FCPMSP_FCPM_CODE_FK_PK = t4.NIVCOM_FCPM_CODE_FK_PK
                                                    and
                                                    t1.FCPMSP_SP_CODE_FK_PK = ?
                                                    and 
                                                    t2.TERCOM_CDF_TER_CODE_FK_PK='ab5' 
                                                    and t2.tercom_fcpm_code_fk_pk = ? " , [$med_sp , $ficheid] ); // ab5 code terrain pour les hypersensibilités
        return $result;
   }

    public function analyse(Request $req){

        $id=$req->input('codeM');
        $id2=$req->input('codei');
        $ante=$req->input('ante');
        $allergie=$req->input('allergie');
        $etat=$req->input('etat');
        $nomM=$req->input('medicament');
        $nomi=$req->input('meds');
        $a_array =[];
        $al_array =[];
        $e_array=[];
        $interaction= $this->interaction_sp_medicamenteuse( $id , $id2 , $nomM , $nomi );
        //$allergies=0;

        $cias = DB::table('nivcom_niveau_commentaire') // liste des contre indications du medicaments
            ->where('NIVCOM_CDF_COM_CODE_FK_PK','=','X9')
            ->join('fcpmsp_cipemg_spe','FCPMSP_FCPM_CODE_FK_PK','=','NIVCOM_FCPM_CODE_FK_PK')
            ->where('FCPMSP_SP_CODE_FK_PK','=',$id)
            ->join('cdf_codif','CDF_CODE_PK','=','NIVCOM_CDF_TER_CODE_FK_PK')
            ->select('CDF_CODE_PK','CDF_NOM','FCPMSP_SP_CODE_FK_PK')
            ->get();
            $ciasA = DB::table('tercom_terrain_commentaire') //liste des allergie du medicament
            ->where('TERCOM_NATURE_CIPEMG_FK_PK','=','C')
            ->join('fcpmsp_cipemg_spe','FCPMSP_FCPM_CODE_FK_PK','=','TERCOM_FCPM_CODE_FK_PK')
            ->where('FCPMSP_SP_CODE_FK_PK','=',$id)
            ->join('cdf_codif','CDF_CODE_PK','=','TERCOM_CDF_COM_CODE_FK_PK')
            ->select('CDF_CODE_PK','CDF_NOM','FCPMSP_SP_CODE_FK_PK')
            ->get();
            if($allergie){ // tester par rappor aux allergies du patients
            foreach($ciasA as $ciaA){
              if($ciaA->CDF_NOM == $allergie){
                $al_array = array(
                    "med" => $nomM,
                    "allergie" => $allergie,
                    "comment" => "medicament contre indique pour cette allergie: ");
              }
            }}
            if($ante){
              foreach($cias as $cia){
                if($cia->CDF_NOM == $ante){
                    $a_array = array(
                        "med" => $nomM,
                        "ante" => $ante,
                        "comment" => "medicament contre indique pour cette pathologie: ");
                }
                

              }
            }
                foreach($cias as $cia){
                    if($cia->CDF_NOM == $etat){
                        $e_array = array(
                            "med" => $nomM,
                            "etat" => $etat,
                            "comment" => "medicament contre indique pour ce patient: ");
                    }
                }
            
            $cis_absolue = DB::select(" select  t3.cdf_nom , t5.NIVCOM_FCPM_CODE_FK_PK as code_fiche 
                                            FROM  fcpmsp_cipemg_spe T1, cdf_codif t3 ,nivcom_niveau_commentaire t5
                                            WHERE t5.NIVCOM_FCPM_CODE_FK_PK = T1.FCPMSP_FCPM_CODE_FK_PK 
                                            and t3.cdf_code_pk=t5.nivcom_cdf_ter_code_fk_pk
                                            and t5.NIVCOM_NATURE_CIPEMG_FK_PK ='C'
                                            AND T1.FCPMSP_SP_CODE_FK_PK       = ?
                                            ORDER BY 1 " , [$id] );
        
      
      for ($i=0; $i < count($cis_absolue); $i++) {

        if ($cis_absolue[$i]->cdf_nom === "HYPERSENSIBILITE") { // test par rapprot à l'allergie
            // resortir les allergies du médicament   
           $allergies = $this->allergies($id , $cis_absolue[$i]->code_fiche);
      }
        //return $cias ;
       //dd($cias);
        if(Auth::user()->role==0){
            return view('pharmacien.analysisresult',['medal'=>$al_array,'medpath'=>$a_array,'medinter'=>$interaction]);}
            else{
             return view('user.analysisresult',['medal'=>$al_array,'medpath'=>$a_array,'medinter'=>$interaction,'medetat'=>$e_array]);
            }
        //dd($req->all());
        //dd($cias);
        //dd($cis_absolue);
        //dd($ciasA);
        //dd($allergies);
       // dd($a_array);
        //dd($al_array);
    }

}
}
