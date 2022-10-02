<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;


class UserController extends Controller
{
   public function index(){
   	$users = user::all()->sortByDesc("created_at");
   	//dd($users);
   	return view('admin.listUser',['users'=>$users]);
   }
   
   
    public function addUser(){
    	return view('admin.creeCompte');
    }
    
    public function store(Request $request){
    	
    	$user = new User();
    	$user->name = $request->input('nom');
    	$user->email = $request->input('email');
    	$user->role = $request->input('role');
    	$user->password = $request->input('password');
    	$user->save();
    	return redirect()->route('listUser');
        //return view('admin.listUser',['user'=>$user]);
    	//return redirect('listUser','sucess');
    	//return back()->with("success","user crée avec succé");
    }
    public function editUser($id){
		$user=user::find($id);
        return view ('admin.editerUser',['user'=>$user]);
    }
    public function delete($id){
    	$user = User::find($id);
        $user->delete();
        $users=User::all();
        return view('admin.listUser',['users' => $users]);
    	
    }
     

       public function edit($id){
    	$user = User::find($id);
    	return view('admin.editerUser', ['user'=>$user]);
    }
    public function update(Request $request,$id){
    	//$id= $request->id;
    	$user = User::find($id);
    	$user->name = $request->input('nom');
    	$user->email = $request->input('email');
    	$user->role = $request->input('role');
    	$user->save();
    	//return redirect('listUser','sucess');
    	return back()->with("success","user crée avec succé");    	
    }

 

}
