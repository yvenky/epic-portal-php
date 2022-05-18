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
            'property_address'                   => 'required',       
            'property_map_right_url'             => 'required',       
        ]);

        $data  = new Property();

        $data -> property_address                = $req-> property_address; 
        $data -> property_of_acres               = $req-> property_of_acres; 
        $data -> property_map_right_url          = $req-> property_map_right_url; 
        $data -> property_contract_url           = $req-> property_contract_url; 
        $data -> property_survey_url             = $req-> property_survey_url; 
        $data -> property_closing_documents      = $req-> property_closing_documents; 
        $data -> property_appraisal              = $req-> property_appraisal; 
        $data -> property_phase_env_inspection   = $req-> property_phase_env_inspection; 
        $data -> property_attorney_feedback      = $req-> property_attorney_feedback; 
        
        $data ->save();

        return redirect('property-submit-confirmation/'. $data->id )->with('success-message', 'New Property Added Successfully');
        
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
