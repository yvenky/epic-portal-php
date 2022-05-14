<?php

namespace App\Http\Controllers;
use App\Models\ENTITY;
use App\Models\ADDRESS;
use App\Models\INVESTOR;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class entityController extends Controller
{
    
    public function index()
    {
        $users = INVESTOR::all();

        return view('backend.template.entity.add-new-entry',  ['users' => $users]);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $req)
    {
        $req->validate([

            'EIN'                           => 'required',
            'ENTITY_NAME'                   => 'required',
            'MANAGING_MEMBER_1'             => 'required',
            'MANAGING_MEMBER_2'             => 'required',
            'OPERATING_AGREEMENT'           => 'required',
            
        ]);

        $insert_address=DB::table('ADDRESS')
        ->insertGetId([
            'STREET_1' =>$req->STREET_1,
            'CITY'     =>$req->CITY,
            'STATE'    =>$req->STATE,
            'ZIP_CODE'  =>$req->ZIP_CODE,
        ]);


        $data_new = DB::table('ENTITY')
        ->insert([

            'EIN'                         => $req-> EIN,
            'ENTITY_NAME'                 => $req-> ENTITY_NAME,
            'ADDRESS_ID'                  =>$insert_address,
            'MANAGING_MEMBER_1'           => $req-> MANAGING_MEMBER_1,
            'MANAGING_MEMBER_2'           => $req-> MANAGING_MEMBER_2,
            'OPERATING_AGREEMENT'         => $req-> OPERATING_AGREEMENT,
        
        ]);

       // $id= DB::table('ENTITY')
       // ->insertGetId([
       //     'ID' =>$req->ID
      //  ]);
            return $data_new;
        //return redirect('entity-submit-confirmation/'. $data_new->ID )->with('success-message', $data->ENTITY_NAME .' Added Successfully');
    }

  
    public function show($id)
    {
        $lists=ENTITY::find($id);
      
        return view('backend.template.entity.entity-view' , ['lists' => $lists, 'ID' => $id ]);
    }

    public function showEntityList()
    {

        $lists= ENTITY::all();

        return view('backend.template.entity.entity-list' , ['lists' => $lists ]);
    }

    public function edit($id)
    {
        $lists=ENTITY::find($id);
        $users = INVESTOR::all();

        return view('backend.template.entity.entity-edit' , ['lists' => $lists, 'users' => $users]);

    }

   
    public function update(Request $req, $id)
    {
       /* $first_name=DB::table('INVESTOR')
                ->where('FIRST_NAME',$req-> FIRST_NAME)
                ->where('INVESTOR.id', $id)
                ->get();

        $last_name=DB::table('INVESTOR')
                ->where('LAST_NAME',$req-> LAST_NAME)
                ->where('INVESTOR.id', $id)
                ->get();

        $full_name = $first_name. " " . $last_name;

        dd($full_name);*/

        $lists = DB::table('ENTITY')
        ->join('ADDRESS','ADDRESS.id' ,'ENTITY.ADDRESS_ID')
        ->join('INVESTOR','INVESTOR.id' ,'ENTITY.id')
        ->where('ENTITY.id', $id)
        ->update([

            'EIN'                         => $req-> EIN,
            'ENTITY_NAME'                 => $req-> ENTITY_NAME,
            'MANAGING_MEMBER_1'           => $req-> $full_name,
            'MANAGING_MEMBER_2'           => $req-> $full_name,
            'OPERATING_AGREEMENT'         => $req-> OPERATING_AGREEMENT,

            'STREET_1'                  =>$req->STREET_1,
            'CITY'                      =>$req->CITY,
            'STATE'                     =>$req->STATE,
            'ZIP_CODE'                  =>$req->ZIP_CODE,

        
        ]);

        $full_name =  $req-> FIRST_NAME. " " .  $req-> LAST_NAME;
        return redirect('entity-list')->with('success-message-edit',  $full_name. ' Updated Successfully');
    }

  
    public function destroy($id)
    {
        //
    }
}
