<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\INVESTOR;
use DB;

class investorController extends Controller
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
    public function show()
    {
        $lists=INVESTOR::all();

        return view('test',['lists' => $lists ]);
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
