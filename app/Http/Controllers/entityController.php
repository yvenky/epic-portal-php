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

       // return view('backend.template.entity.entity-edit' , ['lists' => $lists ]);
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
