<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Hash;
use Auth;

class UserController extends Controller
{
    public function create(Request $request)
    {
    	//les condition du formulaire
    	$request->validate([
    		'name'=>'required',
    		'email'=>'required|email|unique:users,email',
    		'password'=>'required|min:6|max:20',
    		'cpassword'=>'required|same:password'
    	],[
    		'cpassword.required'=>'the confirm fields must required.',//pour modifier le message affichier 
    		'cpassword.same'=>'the confirm password and password must mutch.'
    	]);
    	$user =new user();//create new object user
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=Hash::make($request->password);//pour bloquer le password(faire un mdp annonim)
    	$data=$user->save();
    	if($data){
    		return redirect()->back()->with('success','you have registerd successfully');
    	}else{
    		return redirect()->back()->with('fail','FAILED');
    	}
    }
    public function doLogin(Request $request){
    	$request->validate([
    		'email'=>'required|email',
    		'password'=>'required|min:6|max:20'
    	]);
    	$check =$request->only('email','password');
    	if(Auth::guard('web')->attempt($check)){
           return redirect()->route('user.home')->with('success','welcome to home');
    	}else{
           return redirect()->back()->with('fail','login FAILED');
    	}
    }
    public function logout(){
    	Auth::guard('web')->logout();
    	return redirect('/');
    }
}
