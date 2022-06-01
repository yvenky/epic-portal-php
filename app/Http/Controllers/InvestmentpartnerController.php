<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\INVESTOR;
use App\Models\INVESTMENT;

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

            'INVESTOR_ID'               => 'required',
            'FIRST_NAME'                =>'required',
            'LAST_NAME'                 =>'required',
            'CASH'                      => 'required',
            'LOAN'                      => 'required',
            'SHAREHOLDING'              => 'required',
            'TOTAL_SHARE'               => 'required',
            'FINDER_FEES'               => 'required',
            'CLOSING_FEES'              => 'required',
            'TOTAL_CASH'                => 'required',
            
           
        ]);
      
        $data = new INVESTMENT();
 
        $data-> INVESTOR_ID                         = $request-> INVESTOR_ID;
        $data-> FIRST_NAME                          = $request-> FIRST_NAME; 
        $data-> LAST_NAME                           = $request-> LAST_NAME;  
        $data-> CASH                                = $request-> CASH;
        $data-> LOAN                                = $request-> LOAN; 
        $data-> SHAREHOLDING                        = $request-> SHAREHOLDING; 
        $data-> TOTAL_SHARE                         = $request-> TOTAL_SHARE ; 
        $data-> FINDER_FEES                        = $request-> FINDER_FEES; 
        $data-> CLOSING_FEES                        = $request-> CLOSING_FEES;
        $data-> TOTAL_CASH                        = $request-> TOTAL_CASH;
    
        
        
        $data->save();
     

       return redirect()->back()->with('success-message',' Added Successfully');
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
