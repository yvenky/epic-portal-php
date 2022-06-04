<?php

namespace App\Http\Controllers;

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
                'PROPERTY_SELECT'                     => 'required',        
                'TOTAL_PROPERTIES_VALUE'            => 'required',
            ]);

      //$getarrayReq = $req->PROPERTY_SELECT;
      //$getid = implode(',', $getarrayReq);
 
    $data = new ENTITY_PROPERTIES();
    $data->ENTITY_SELECT                     = $req->ENTITY_SELECT;
    $data->PROPERTY_SELECT                   = $req->PROPERTY_SELECT;
    $data->TOTAL_PROPERTIES_VALUE            = $req->TOTAL_PROPERTIES_VALUE;
    $data->save();

    
            return redirect('/entity-newpartner-add');
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
