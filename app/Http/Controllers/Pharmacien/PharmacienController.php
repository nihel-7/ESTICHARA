<?php

namespace App\Http\Controllers\Pharmacien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\pharmacien;
use Auth;
use Hash;

class PharmacienController extends Controller
{
    public function create(Request $request){
    	//validate inputs
    	$request->validate([
    		'name'=>'required',
    		'email'=>'required|email|unique:pharmaciens,email',
            'specialite'=>'required',
            'adress'=>'required',
            'phone'=>'required',
    		'password'=>'required|min:6|max:20',
    		'cpassword'=>'required|same:password'
    	],[
            'cpassword.required'=>'the confirm fields must required.',//pour modifier le message affichier 
            'cpassword.same'=>'the confirm password and password must mutch.'
        ]);
    	$pharmacien = new pharmacien();//create new object user
    	$pharmacien->name=$request->name;
    	$pharmacien->email=$request->email;
    	$pharmacien->specialite=$request->specialite;
    	$pharmacien->adress=$request->adress;
    	$pharmacien->phone=$request->phone;
    	$pharmacien->password=Hash::make($request->password);//pour bloquer le password(faire un mdp annonim)
    	$data=$pharmacien->save();
    	if($data){
    		return redirect()->back()->with('success','you have registerd successfully');
    	}else{
    		return redirect()->back()->with('fail','FAILED');
    	}

    }
    function check (Request $request){
        //validation des inputs
        $request->validate([
            'email'=>'required|email|exists:pharmaciens,email',
            'password'=>'required|min:6|max:20'
        ],[
            'email.exists'=>'This email is not exists'
        ]);
        $creds =$request->only('email','password');
        if(Auth::guard('pharmacien')->attempt($creds)){
             return redirect()->route('pharmacien.home')->with('success','welcome to home');
        }
        else{
             return redirect()->route('pharmacien.login')->with('fail','incorrect donnee');
        }
    }
}
