<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use DB;
use App\Models\ENTITY_PROPERTIES;
use App\Models\ENTITY;


class EntityPropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req )
    {

        $req->validate([
                'ENTITY_SELECT'                     => 'required',  
                'PROPERTY_SELECT'                   => 'required',        
                'TOTAL_PROPERTIES_VALUE'            => 'required',
            ]);

      //$getarrayReq = $req->PROPERTY_SELECT;
      //$getid = implode(',', $getarrayReq);

      
        //     $passvalues=DB::table('ENTITY_PROPERTIES')
        //    ->insert([
        //        'ENTITY_SELECT'              =>$req->ENTITY_SELECT,
        //        'PROPERTY_SELECT'            =>$req->PROPERTY_SELECT,
        //        'TOTAL_PROPERTIES_VALUE'     =>$req->TOTAL_PROPERTIES_VALUE,
        //     ]);

            $passvalues = new ENTITY_PROPERTIES();
            $passvalues->ENTITY_SELECT                     = $req->ENTITY_SELECT;
            $passvalues->PROPERTY_SELECT                   = $req->PROPERTY_SELECT;
            $passvalues->TOTAL_PROPERTIES_VALUE            = $req->TOTAL_PROPERTIES_VALUE;

            $passvalues->save();

    
            return redirect('/entity-newpartner-add');
            //return Redirect::to('/entity-newpartner-add')->withInput($passvalues);
          
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
