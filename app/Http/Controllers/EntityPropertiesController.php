<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

            $propert_select = $req->PROPERTY_SELECT;
            $property_array = implode(',', $propert_select );

            $data_new = DB::table('ENTITY_PROPERTIES')
            ->insert([
    
                'ENTITY_SELECT'                             => $req-> ENTITY_SELECT,
                'PROPERTY_SELECT'                           => $property_array,
                'TOTAL_PROPERTIES_VALUE'                    => $req-> TOTAL_PROPERTIES_VALUE,
        
            ]); 

            return $data_new ;
    
            return redirect('/entity-newpartner-add')->with('success-message', 'New Property Added Successfully');
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
