<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ENTITY_PROPERTIES;
use App\Models\ENTITY;
use App\Models\PROPERTY;


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
    public function store(Request $req)
    {

        $req->validate([
            'ENTITY_SELECT' => 'required',
            'PROPERTY_SELECT' => 'required',
            'TOTAL_PROPERTIES_VALUE' => 'required',
        ]);

        $getarrayReq = $req->PROPERTY_SELECT;
        $getid = implode(',', $getarrayReq);


        $passvalues = DB::table('ENTITY_PROPERTIES')
            ->insertGetId([
                'ENTITY_SELECT' => $req->ENTITY_SELECT,
                'PROPERTY_SELECT' => $getid,
                'TOTAL_PROPERTIES_VALUE' => $req->TOTAL_PROPERTIES_VALUE,
            ]);


           session()->flash('entity',$req->ENTITY_SELECT);
           session()->flash('property',$getid);
           session()->flash('total',$req->TOTAL_PROPERTIES_VALUE);

        return redirect("/entity-newpartner-add");
    }


    public function create()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}