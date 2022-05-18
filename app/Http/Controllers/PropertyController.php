<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\entityController;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\ENTITY;
use APP\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // return view('backend.template.property.add-new-property');
        $lists = PROPERTY::all();
        $users=ENTITY::all();

        return view('backend.template.property.add-new-property',  ['lists' => $lists, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        
        $req->validate([

        'PROPERTY_ADDRESS'        => 'required',    
        'GOOGLE_COORDINATES'      => 'required',      
        'ENTITY_COMPANY'          => 'required',    
        'NO_OF_ACRES'             => 'required',       
        'MAP_URL'                 => 'required',  
        'PROPERTY_DOCUMENTS'      => 'required', 
        'PURCHASE_PRICE'          => 'required',          
        'COST_PER_ACRE'           => 'required', 
        'POTENTIAL_PER_ACRE'      => 'required', 
        'POTENTIAL_MARKET_VALUE'  => 'required',      
        ]);


        $data  = new Property();

        $data -> PROPERTY_ADDRESS               = $req-> PROPERTY_ADDRESS; 
        $data -> GOOGLE_COORDINATES             = $req-> GOOGLE_COORDINATES; 
        $data -> ENTITY_COMPANY                 = $req-> ENTITY_COMPANY; 
        $data -> NO_OF_ACRES                    = $req-> NO_OF_ACRES ; 
        $data -> MAP_URL                        = $req-> MAP_URL; 
        $data -> PROPERTY_DOCUMENTS             = $req-> PROPERTY_DOCUMENTS; 
        $data -> PURCHASE_PRICE                 = $req-> PURCHASE_PRICE; 
        $data -> COST_PER_ACRE                  = $req-> COST_PER_ACRE; 
        $data -> POTENTIAL_PER_ACRE             = $req-> POTENTIAL_PER_ACRE; 
        $data -> POTENTIAL_MARKET_VALUE         = $req-> POTENTIAL_MARKET_VALUE; 
        
        $data ->save();

        //return redirect('property-submit-confirmation/'. $data->id )->with('success-message', 'New Property Added Successfully');
        return redirect('property-list' )->with('success-message', 'New Property Added Successfully');
        
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

    public function show_list(){
        $lists= Property::all();

        return view('backend.template.property.property-list' , ['lists' => $lists]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lists= Property::find($id);
      
        return view('backend.template.property.property-view' , ['lists' => $lists, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lists= Property::find($id);
      
        return view('backend.template.property.property-list-edit' , ['lists' => $lists]);
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

        $lists = Property::find($id);
        $lists-> property_address                    = $request-> property_address; 
        $lists-> property_of_acres                   = $request-> property_of_acres; 
        $lists-> property_map_right_url              = $request-> property_map_right_url;
        $lists-> property_contract_url	             = $request-> property_contract_url; 
        $lists-> property_survey_url	             = $request-> property_survey_url; 
        $lists-> property_closing_documents	         = $request-> property_closing_documents; 
        $lists-> property_appraisal	                 = $request-> property_appraisal; 
        $lists-> property_phase_env_inspection       = $request-> property_phase_env_inspection; 
        $lists-> property_attorney_feedback          = $request-> property_attorney_feedback; 
        $lists->update();
        return redirect('property-list')->with('success-message-edit', $lists-> property_address. ' Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $lists = Property::find($id);
        $lists->delete();
      
       
        return redirect('property-list')->with('success-message-delete', $lists->property_address .' Deleted Successfully');

    }

    public function confirmation($id )
    {
        $lists= Property::find($id);
        return view('backend.template.property.property-submit-confirmation' , ['lists' => $lists]);
    }
}
