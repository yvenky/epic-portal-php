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
        ->insertGetId([

            'EIN'                         => $req-> EIN,
            'ENTITY_NAME'                 => $req-> ENTITY_NAME,
            'ADDRESS_ID'                  => $insert_address,
            'MANAGING_MEMBER_1'           => $req-> MANAGING_MEMBER_1,
            'MANAGING_MEMBER_2'           => $req-> MANAGING_MEMBER_2,
            'OPERATING_AGREEMENT'         => $req-> OPERATING_AGREEMENT,
        
        ]);



       // $id= DB::table('ENTITY')
       // ->insertGetId([
       //     'ID' =>$req->ID
      //  ]);
            //return $data_new;
        return redirect('entity-submit-confirmation/'. $data_new )->with('success-message', $req-> ENTITY_NAME .' Added Successfully');
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

        $lists = DB::table('ENTITY')
        ->join('ADDRESS','ADDRESS.id' ,'ENTITY.ADDRESS_ID')
        ->where('ENTITY.id', $id)
        ->update([

            'EIN'                         => $req-> EIN,
            'ENTITY_NAME'                 => $req-> ENTITY_NAME,
            'OPERATING_AGREEMENT'         => $req-> OPERATING_AGREEMENT,
            'MANAGING_MEMBER_1'           => $req-> MANAGING_MEMBER_1,
            'MANAGING_MEMBER_2'           => $req-> MANAGING_MEMBER_2,
            'STREET_1'                  =>$req->STREET_1,
            'CITY'                      =>$req->CITY,
            'STATE'                     =>$req->STATE,
            'ZIP_CODE'                  =>$req->ZIP_CODE,        
        ]);


        return redirect('entity-list')->with('success-message-edit',  $req-> ENTITY_NAME . ' Updated Successfully');
    }

  
    public function delete($id)
    {
        $get_address=DB::table('ENTITY')->where('id',$id)->first();
        DB::table('ADDRESS')->where('id',$get_address->ADDRESS_ID)->delete();
        Db::table('ENTITY')->where('id',$id)->delete();

        $full_name =  $get_address-> ENTITY_NAME ;
      
        
        return back()->with('success-message-delete', $full_name .' Deleted Successfully');
    }

    public function confirmation($id )
    {
            $lists=ENTITY::find($id);
          
            return view('backend.template.entity.entity-submit-confirmation' , ['lists' => $lists]);
        
    }
}
