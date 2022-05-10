<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\INVESTOR;
use App\Models\ADDRESS;
use App\Models\city;
use Illuminate\Support\Facades\DB;


class investorController extends Controller
{
    public function index()
    {
        

        return view('backend.template.investor.investor-registration');
    }

    public function store(Request $req)
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

        ]);


        $data_new = DB::table('INVESTOR')
        ->join('ADDRESS','ADDRESS.ID','INVESTOR.ADDRESS_ID')
        ->where('id', $id)
        ->create([

            'FIRST_NAME'                => $req-> FIRST_NAME,
            'LAST_NAME'                 => $req-> LAST_NAME,
            'EMAIL_ADDRESS'             => $req-> EMAIL_ADDRESS,
            'PHONE_NUMBER'              => $req-> PHONE_NUMBER,
            'EMPLOYMENT_STATUS'         => $req-> EMPLOYMENT_STATUS,
            'HOUSEHOLD_INCOME'          => $req-> HOUSEHOLD_INCOME,
            'SPOUSE_FIRSTNAME'          => $req-> SPOUSE_FIRSTNAME,
            'SPOUSE_LASTNAME'           => $req-> SPOUSE_LASTNAME,
            'SPOUSE_EMAIL'              => $req-> SPOUSE_EMAIL,
            'SPOUSE_PHONE_NO'           => $req-> SPOUSE_PHONE_NO,
            'SPOUSE_EMPLOYMENT_STATUS'  => $req-> SPOUSE_EMPLOYMENT_STATUS,

            'STREET_1'                  =>$req->STREET_1,
            'CITY'                      =>$req->CITY,
            'STATE'                     =>$req->STATE,
            'ZIP_CODE'                  =>$req->ZIP_CODE,

        
        ]);

            return $data_new;
  
      //return back()->with('success-message', 'New investor Added Successfully');

     //return redirect('investor-submit-confirmation/'. $data_new->id )->with('success-message', 'New investor Added Successfully');

     //return view('backend.template.investor.investor-submit-confirmation');
    
    }



    public function show($id)
    {
        $lists= INVESTOR::find($id);

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

    public function update(Request $req, $id)
    {

       
        $lists = DB::table('INVESTOR')
        ->join('ADDRESS','ADDRESS.ID','INVESTOR.ADDRESS_ID')
        ->where('id', $id)
        ->update([

            'FIRST_NAME'                => $req-> FIRST_NAME,
            'LAST_NAME'                 => $req-> LAST_NAME,
            'EMAIL_ADDRESS'             => $req-> EMAIL_ADDRESS,
            'PHONE_NUMBER'              => $req-> PHONE_NUMBER,
            'EMPLOYMENT_STATUS'         => $req-> EMPLOYMENT_STATUS,
            'HOUSEHOLD_INCOME'          => $req-> HOUSEHOLD_INCOME,
            'SPOUSE_FIRSTNAME'          => $req-> SPOUSE_FIRSTNAME,
            'SPOUSE_LASTNAME'           => $req-> SPOUSE_LASTNAME,
            'SPOUSE_EMAIL'              => $req-> SPOUSE_EMAIL,
            'SPOUSE_PHONE_NO'           => $req-> SPOUSE_PHONE_NO,
            'SPOUSE_EMPLOYMENT_STATUS'  => $req-> SPOUSE_EMPLOYMENT_STATUS,

            'STREET_1'                  =>$req->STREET_1,
            'CITY'                      =>$req->CITY,
            'STATE'                     =>$req->STATE,
            'ZIP_CODE'                  =>$req->ZIP_CODE,

        
        ]);
       
        

        $full_name =  $req-> FIRST_NAME. " " .  $req-> LAST_NAME;
        
        return redirect('investor-list')->with('success-message-edit',  $full_name. 'Updated Successfully');

        
    }

    public function delete($id)
    {
        

        $lists=DB::table('INVESTOR')->delete($id);
      
        $full_name =  $req->FIRST_NAME . " " .  $req->LAST_NAME;
        return back()->with('success-message-delete', $full_name. 'Deleted Successfully');
    }

    public function confirmation($id )
    {
        $lists=INVESTOR::find($id);
          
        return view('backend.template.investor.investor-submit-confirmation' , ['lists' => $lists]);
        
    }

}
