<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddNewEntry;
use App\Models\partnerRegistrationInd;

class newentitycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = partnerRegistrationInd::all();

        return view('backend.template.entity.add-new-entry',  ['users' => $users]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {       
        $request->validate([
            'add_partner_entity_name'                       => 'required',
            'add_partner_entity_ein'                        => 'required',
            'add_partner_entity_docs'                       => 'required',
            'add_partner_managing_member_1'                 => 'required',
            'add_partner_entity_address_street'             => 'required',
            'add_partner_entity_address_city'                           => 'required',
            'add_partner_entity_address_state'                          => 'required',
            'add_partner_entity_address_zipcode'                        => 'required',
           
        ]);
      
        $data = new AddNewEntry();
 
        $data-> add_partner_entity_name             = $request-> add_partner_entity_name; 
        $data-> add_partner_entity_ein              = $request-> add_partner_entity_ein;  
        $data-> add_partner_entity_docs             = $request-> add_partner_entity_docs;
        $data-> add_partner_managing_member_1       = $request-> add_partner_managing_member_1; 
        $data-> add_partner_managing_member_2       = $request-> add_partner_managing_member_2; 
        $data-> add_partner_entity_address_street   = $request-> add_partner_entity_address_street ; 
        $data-> add_partner_entity_address_city     = $request-> add_partner_entity_address_city; 
        $data-> add_partner_entity_address_state    = $request-> add_partner_entity_address_state; 
        $data-> add_partner_entity_address_zipcode  = $request-> add_partner_entity_address_zipcode;
        
        $data->save();
     

        return redirect('entity-submit-confirmation/'. $data->id )->with('success-message', $data->add_partner_entity_name .' Added Successfully');
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
    public function showEntityList()
    {
        $lists= AddNewEntry::all();

        return view('backend.template.entity.entity-list' , ['lists' => $lists ]);
    }

    public function show($id)
    {
        $lists=AddNewEntry::find($id);
      
        return view('backend.template.entity.entity-view' , ['lists' => $lists, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lists=AddNewEntry::find($id);
        $users = partnerRegistrationInd::all();

        return view('backend.template.entity.entity-edit' , ['lists' => $lists, 'users' => $users]);
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
        
        $lists=AddNewEntry::find($id);
        $lists-> add_partner_entity_name             = $request-> add_partner_entity_name; 
        $lists-> add_partner_entity_ein              = $request-> add_partner_entity_ein; 
        $lists-> add_partner_entity_docs             = $request-> add_partner_entity_docs;
        $lists-> add_partner_managing_member_1       = $request-> add_partner_managing_member_1; 
        $lists-> add_partner_managing_member_2       = $request-> add_partner_managing_member_2; 
        $lists-> add_partner_entity_address_street   = $request-> add_partner_entity_address_street ; 
        $lists-> add_partner_entity_address_city     = $request-> add_partner_entity_address_city; 
        $lists-> add_partner_entity_address_state    = $request-> add_partner_entity_address_state; 
        $lists-> add_partner_entity_address_zipcode  = $request-> add_partner_entity_address_zipcode; 
   
        $lists->update();
        return back()->with('success-message-edit', $lists-> add_partner_entity_name . ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $lists=AddNewEntry::find($id);
        $lists->delete();
      
        
        return back()->with('success-message-delete', $lists-> add_partner_entity_name .' Deleted Successfully');
    }

    public function confirmation($id )
    {
            $lists=AddNewEntry::find($id);
          
            return view('backend.template.entity.entity-submit-confirmation' , ['lists' => $lists]);
        
    }
}
