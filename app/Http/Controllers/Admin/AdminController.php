<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AdminController extends Controller
{
    public function doLogin(Request $request){
    	$request->validate([
    		'email'=>'required|email|exists:admins,email',
    		'password'=>'required|min:6|max:20'
    	]);
    	$check =$request->only('email','password');
    	if(Auth::guard('admin')->attempt($check)){
           return redirect()->route('admin.home')->with('success','welcome to admin home');
    	}else{
           return redirect()->back()->with('fail','login FAILED');
    	}
    }
    public function logout(){
    	Auth::guard('admin')->logout();
    	return redirect('/');
    }
}
