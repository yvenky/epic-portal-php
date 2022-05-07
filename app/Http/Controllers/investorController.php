<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\INVESTOR;
use App\Models\ADDRESS;
use App\Models\city;
use APP\DB;

class investorController extends Controller
{
    public function index()
    {
        

        return view('backend.template.investor.investor-registration');
    }

    public function create(Request $req)
    {
        $req->validate([
            'FIRST_NAME'                => 'required',
            'LAST_NAME'                 => 'required',
            'ADDRESS_ID'                => 'required',
            'EMAIL_ADDRESS'             => 'required',
            'PHONE_NUMBER'              => 'required',
            'EMPLOYMENT_STATUS'         => 'required',
            'HOUSEHOLD_INCOME'          => 'required',
            'SPOUSE_FIRSTNAME'          => 'required',
            'SPOUSE_LASTNAME'           => 'required',
            'SPOUSE_EMAIL'              => 'required',
            'SPOUSE_PHONE_NO'           => 'required',
            'SPOUSE_EMPLOYMENT_STATUS'  => 'required',
            'partner_individual_state'  => 'required',
        ]);

        $data_new  = new INVESTOR();

        $data_new -> FIRST_NAME                  = $req-> FIRST_NAME; 
        $data_new -> LAST_NAME                   = $req-> LAST_NAME; 
        $data_new -> ADDRESS_ID                  = $req-> ADDRESS_ID;
        $data_new -> EMAIL_ADDRESS               = $req-> EMAIL_ADDRESS; 
        $data_new -> PHONE_NUMBER                = $req-> PHONE_NUMBER; 
        $data_new -> EMPLOYMENT_STATUS           = $req-> EMPLOYMENT_STATUS;
        $data_new -> HOUSEHOLD_INCOME            = $req-> HOUSEHOLD_INCOME; 
        $data_new -> SPOUSE_FIRSTNAME            = $req-> SPOUSE_FIRSTNAME; 
        $data_new -> SPOUSE_LASTNAME             = $req-> SPOUSE_LASTNAME; 
        $data_new -> SPOUSE_EMAIL                = $req-> SPOUSE_EMAIL; 
        $data_new -> SPOUSE_PHONE_NO             = $req-> SPOUSE_PHONE_NO; 
        $data_new -> SPOUSE_EMPLOYMENT_STATUS    = $req-> SPOUSE_EMPLOYMENT_STATUS; 
        $data_new -> partner_individual_state    = $req-> partner_individual_state; 
        
        $data_new ->save();
    
      return redirect('investor-submit-confirmation/'. $data_new->id )->with('success-message', 'New Investor Added Successfully');
    }

    public function show($id)
    {
        $lists=INVESTOR::find($id);

        return view('backend.template.investor.investor-view',['lists' => $lists, 'ID' => $id ]);
    }

    public function showList()
    {
        $lists= INVESTOR::all();

        return view('backend.template.investor.investor-list' , ['lists' => $lists]);
    }
    public function edit($id)
    {
        $lists=INVESTOR::find($id);
        return view('backend.template.investor.investor-edit' , ['lists' => $lists]);
    }

    public function update(Request $request, $id)
    {
        $lists = INVESTOR::find($id);
        $lists->FIRST_NAME                  = $request->FIRST_NAME; 
        $lists->LAST_NAME                   = $request->LAST_NAME; 
        $lists->EMAIL_ADDRESS               = $request->EMAIL_ADDRESS;
        $lists->PHONE_NUMBER                = $request->PHONE_NUMBER; 
        $lists->EMPLOYMENT_STATUS           = $request->EMPLOYMENT_STATUS; 
        $lists->HOUSEHOLD_INCOME	        = $request->HOUSEHOLD_INCOME; 
        $lists->SPOUSE_FIRSTNAME	        = $request->SPOUSE_FIRSTNAME; 
        $lists->SPOUSE_LASTNAME	            = $request->SPOUSE_LASTNAME; 
        $lists->SPOUSE_EMAIL	            = $request->SPOUSE_EMAIL; 
        $lists->SPOUSE_PHONE_NO	            = $request->SPOUSE_PHONE_NO; 
        $lists->SPOUSE_EMPLOYMENT_STATUS    = $request->SPOUSE_EMPLOYMENT_STATUS; 
        $lists->update();
     
        $full_name =  $lists->FIRST_NAME . " " .  $lists->LAST_NAME;
        return redirect('investor-list')->with('success-message-edit',  $full_name. ' Updated Successfully');
    }

    public function delete($id)
    {
        $lists=INVESTOR::find($id);
        $lists->delete();
      
        $full_name =  $lists->FIRST_NAME . " " .  $lists->LAST_NAME;
        return back()->with('success-message-delete', $full_name.' Deleted Successfully');
    }

    public function confirmation($id )
    {
        $lists=INVESTOR::find($id);
          
        return view('backend.template.investor.investor-submit-confirmation' , ['lists' => $lists]);
        
    }

}
