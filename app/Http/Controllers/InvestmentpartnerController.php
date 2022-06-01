<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\INVESTOR;

class InvestmentpartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = INVESTOR::all();

        
        return view('backend.template.entity-shareholding.entity-newpartner-add',['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([

            'CASH'                      => 'required',
            'LOAN'                      => 'required',
            'SHAREHOLDING'              => 'required',
            'TOTAL_SHARE'               => 'required',
            'FINDER_FEES'               => 'required',
            'CLOSING_FEES'              => 'required',
            'TOTAL_CASH'                => 'required',
            'ENTITY_PROPERTIES'         => 'required',
            'CLOSING_FEES'              => 'required',
            'INVESTOR_ID'               => 'required',
           
        ]);
      
        $data = new INVESTMENT();
 
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
