<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
class EducationController extends Controller
{
    public function test (Request $req){
     
        if ( Education::find($req->input('med')) ){
            $education = Education::find($req->input('med'));
            $education->edu_text= $req->input('edu');
            $education->save();
            return true;
        }
        else {
            $cat=0;
            $education= new Education();
            $education->id= $req->input('med');
            $education->edu_text= $req->input('edu');
            $education->save();
            return redirect()->action('medicationdetail',['id'=>$req->input('med'),'cat'=>$cat]);



        }

  //dd($req->all());
    }
}
