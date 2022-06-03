<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ENTITY;
use App\Models\PROPERTY;
use App\Models\INVESTMENT;
use App\Models\ENTITY_PROPERTIES;
use App\Models\INVESTOR;
use DB;

class EntityShareholdingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users=ENTITY::all();
        $lists = PROPERTY::all();
        $files= INVESTMENT::all();
        $shares= ENTITY_PROPERTIES::all();
    
        return view('backend.template.entity-shareholding.entityshareholding-index',  [ 'lists' => $lists,'users' => $users,'files' => $files, 'shares' => $shares]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = INVESTOR::all();
        $entitys=ENTITY::all();
        $propertys = PROPERTY::all();

        
        return view('backend.template.entity-shareholding.entity-newpartner-add',['users' => $users, 'entitys' => $entitys, 'propertys' => $propertys,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        
      $getarrayReq = $request->PROPERTY_SELECT;
      $getid = implode(',', $getarrayReq);

        $insert_entity_properties=DB::table('ENTITY_PROPERTIES')
        ->insertGetId([
            'ENTITY_SELECT'              =>$request->ENTITY_SELECT,
            'PROPERTY_SELECT'            =>$getid,
            'TOTAL_PROPERTIES_VALUE'     =>$request->TOTAL_PROPERTIES_VALUE ,
        ]);
      
        $data = new INVESTMENT();
 
        $data-> INVESTOR_ID                         = $request-> INVESTOR_ID;
        $data-> ENTITY_PROPERTIES_ID                = $insert_entity_properties;
        $data-> FIRST_NAME                          = $request-> FIRST_NAME; 
        $data-> LAST_NAME                           = $request-> LAST_NAME;  
        $data-> CASH                                = $request-> CASH;
        $data-> LOAN                                = $request-> LOAN; 
        $data-> SHAREHOLDING                        = $request-> SHAREHOLDING; 
        $data-> TOTAL_SHARE                         = $request-> TOTAL_SHARE ; 
        $data-> FINDER_FEES                         = $request-> FINDER_FEES; 
        $data-> CLOSING_FEES                        = $request-> CLOSING_FEES;
        $data-> TOTAL_CASH                          = $request-> TOTAL_CASH;
  
        $data->save();
     

       return redirect('/entity-shareholding')->with('success-message',' Investment Partner Added Successfully');
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
        $lists=INVESTMENT::find($id);
        $users = INVESTOR::all();
        $shares = ENTITY_PROPERTIES::all();
        $entitys=ENTITY::all();
        $propertys = PROPERTY::all();


        return view('backend.template.entity-shareholding.entity-shareholding-edit' , ['lists' => $lists, 'users' => $users,'shares' => $shares, 'entitys' => $entitys,'propertys' => $propertys]);
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

        $getarrayReq = $req->PROPERTY_SELECT;
        $getid = implode(',',$getarrayReq);
       
            $lists = DB::table('INVESTMENT')
            ->join('ENTITY_PROPERTIES','ENTITY_PROPERTIES.id' ,'INVESTMENT.ENTITY_PROPERTIES_ID')
            ->where('INVESTMENT.id', $id)
            ->update([
    
                'FIRST_NAME'                => $req-> FIRST_NAME,
                'LAST_NAME'                 => $req-> LAST_NAME,
                'CASH'                      => $req-> CASH,
                'LOAN'                      => $req-> LOAN,
                'SHAREHOLDING'              => $req-> SHAREHOLDING,
                'TOTAL_SHARE'               => $req-> TOTAL_SHARE,
                'FINDER_FEES'               => $req-> FINDER_FEES,
                'CLOSING_FEES'              => $req-> CLOSING_FEES,
                'TOTAL_CASH'                => $req-> TOTAL_CASH,
                'INVESTOR_ID'               => $req-> INVESTOR_ID,       
                'ENTITY_SELECT'             => $req->ENTITY_SELECT,
                'PROPERTY_SELECT'           => $getid,
                'TOTAL_PROPERTIES_VALUE'    => $req->TOTAL_PROPERTIES_VALUE,  
    
            
            ]);



            $full_name =  $req-> FIRST_NAME. " " .  $req-> LAST_NAME;
        
            return redirect('entity-shareholding')->with('success-message-edit',  $full_name. ' Updated Successfully');     
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $get_id=DB::table('INVESTMENT')->where('id',$id)->first();
        DB::table('ENTITY_PROPERTIES')->where('id',$get_id->ENTITY_PROPERTIES_ID)->delete();
        DB::table('INVESTMENT')->where('ID',$id)->delete();

        return back()->with('success-message-delete',' Deleted Successfully'); 
    }

}