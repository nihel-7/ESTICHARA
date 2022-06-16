<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pathologie;
use Illuminate\Support\Facades\DB;


class PathologyController extends Controller
{
    public function autocomplete (){
        $result = array();
        $sp1 = DB::table('ccl_classeclinique')
              ->where('ccl_classeclinique.CCL_NOM','LIKE' , '%' . $_POST['phrase'] . '%')
              ->limit(15)     
              ->get();
          $result =  $sp1; 
          return response()->json($result);
    }
   
   
    public function autocomple (Request $rquest){
        $data = Pathologie::select("CCL_NOM")
                        ->where("CCL_NOM","LIKE","%{$request->terms}%")
                        ->get();
                
                        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function search()
    {
        $nom=request()->input('nom');
        
        $noms=pathologie::where('pathologie','like',"%$nom%");
        return $noms->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

