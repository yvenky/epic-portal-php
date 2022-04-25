<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\partnerRegistrationInd;
use App\Models\City;
use App\Models\State;
use APP\DB;

class newPartnerRegistrationInd extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view('backend.template.newregistration.new-partner-registration-ind');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $req->validate([
            'partner_individual_first_name'                => 'required',
            'partner_individual_last_name'                 => 'required',
            'partner_individual_email_address'             => 'required',
            'partner_individual_spouse_first_name'         => 'required',
            'partner_individual_spouse_last_name'          => 'required',
            'partner_individual_spouse_email_address'      => 'required',
            'partner_individual_employment_status'         => 'required',
            'partner_individual_household_income'          => 'required',
            'partner_individual_employment_status_spouse'  => 'required',
            'partner_individual_street'                    => 'required',
            'partner_individual_zip_code'                  => 'required',
            'partner_individual_city'                      => 'required',
            'partner_individual_state'                     => 'required',
       
        ]);

        $data_new  = new partnerRegistrationInd();

        $data_new -> partner_individual_first_name                  = $req-> partner_individual_first_name; 
        $data_new -> partner_individual_last_name                   = $req-> partner_individual_last_name; 
        $data_new -> partner_individual_email_address               = $req-> partner_individual_email_address;
        $data_new -> partner_individual_spouse_first_name           = $req-> partner_individual_spouse_first_name; 
        $data_new -> partner_individual_spouse_last_name            = $req-> partner_individual_spouse_last_name; 
        $data_new -> partner_individual_spouse_email_address        = $req-> partner_individual_spouse_email_address;
        $data_new -> partner_individual_employment_status           = $req-> partner_individual_employment_status; 
        $data_new -> partner_individual_household_income            = $req-> partner_individual_household_income; 
        $data_new -> partner_individual_employment_status_spouse    = $req-> partner_individual_employment_status_spouse; 
        $data_new -> partner_individual_street                      = $req-> partner_individual_street; 
        $data_new -> partner_individual_zip_code                    = $req-> partner_individual_zip_code; 
        $data_new -> partner_individual_city                        = $req-> partner_individual_city; 
        $data_new -> partner_individual_state                       = $req-> partner_individual_state; 
        
        $data_new ->save();
    

      //return back()->with('success-message','New Partner Add Successfully');
      return redirect('investor-submit-confirmation/'. $data_new->id )->with('success-message', 'New Partner Add Successfully');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      
    }
    
    public function showInvestorList()
    {
        $lists= partnerRegistrationInd::all();

        return view('backend.template.newregistration.investor-list' , ['lists' => $lists]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $lists=partnerRegistrationInd::find($id);
      
        return view('backend.template.newregistration.investor-view' , ['lists' => $lists, 'id' => $id]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lists=partnerRegistrationInd::find($id);
      
        return view('backend.template.newregistration.investor-list-edit' , ['lists' => $lists]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $lists=partnerRegistrationInd::find($id);

        
        $lists->partner_individual_first_name                  = $req->partner_individual_first_name; 
        $lists->partner_individual_last_name                   = $req->partner_individual_last_name; 
        $lists->partner_individual_email_address               = $req->partner_individual_email_address;
        $lists->partner_individual_spouse_first_name           = $req->partner_individual_spouse_first_name; 
        $lists->partner_individual_spouse_last_name            = $req->partner_individual_spouse_last_name; 
        $lists->partner_individual_spouse_email_address        = $req->partner_individual_spouse_email_address;
        $lists->partner_individual_employment_status           = $req->partner_individual_employment_status; 
        $lists->partner_individual_household_income            = $req->partner_individual_household_income; 
        $lists->partner_individual_employment_status_spouse    = $req->partner_individual_employment_status_spouse; 
        $lists->partner_individual_street                      = $req->partner_individual_street;
        $lists->partner_individual_zip_code                    = $req->partner_individual_zip_code; 
        $lists->partner_individual_city                        = $req->partner_individual_city; 
        $lists->partner_individual_state                       = $req->partner_individual_state;
   
        $lists->update();
       // return back()->with('success-message-edit','Entity Updated Successfully');

        $full_name =  $lists->partner_individual_first_name . " " .  $lists->partner_individual_last_name;
        
        return redirect('investor-list')->with('success-message-edit',  $full_name. ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $lists=partnerRegistrationInd::find($id);
        $lists->delete();
      
        $full_name =  $lists->partner_individual_first_name . " " .  $lists->partner_individual_last_name;
        return back()->with('success-message-delete', $full_name.' Remove Successfully');

    }

    public function confirmation($id )
    {
            $lists=partnerRegistrationInd::find($id);
          
            return view('backend.template.newregistration.investor-submit-confirmation' , ['lists' => $lists]);
        
    }


}
