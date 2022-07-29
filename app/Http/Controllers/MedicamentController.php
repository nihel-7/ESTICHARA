<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicamentController extends Controller
{
   public function getmedicament (Request $request)
   {
   	 $name=$request->get('name');
   	 $fieldName =$request->get('fieldName');

   	 $name = strtolower(trim($name));
   	 if(empty($fieldName))
   	 {
   	 	$fieldName = 'name';
   	 }
   	 $medicament = DB::table('sp_specialite')
   	 ->select('SP_NOM', 'SP_CODE_SQ_PK', 'SPFOTX_TEXTE')->where(`LOWER(`.$fieldName.`)`,'LIKE',"$name%")
   	 ->limit(25)
   	 ->get();
   	 return $medicament;

   }
   /*public function multi()
      {
        return view('user.prescriptionanalysis');
      }*/
}
