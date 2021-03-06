<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\ENTITY;
use App\Models\PROPERTY;
use App\Models\INVESTMENT;
use App\Models\ENTITY_PROPERTIES;
use App\Models\INVESTOR;
use DB;
use Illuminate\Http\Request;

class  EntityShareholdingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users= ENTITY::all();
        $lists= PROPERTY::all();
       $files= INVESTMENT::all();
        $sum_total_share = DB::table("INVESTMENT")->sum('TOTAL_SHARE');
        $sum_total_shareholding = DB::table("INVESTMENT")->sum('SHAREHOLDING');
        $sum_total_cash = DB::table("INVESTMENT")->sum('CASH');
        $sum_total_loan = DB::table("INVESTMENT")->sum('LOAN');

        // $files = INVESTMENT::whereHas('entity_select', function($q) use ($users){
        //     $q->where("ENTITY_ID",'=',47);
        // })->get();

    //     $files = INVESTMENT::with('entity_select')
    // ->whereHas('entity_select', function($q) use ($users) {
    //     $q->where('ENTITY_ID', $users);
    // })->get();


   //return $files;
      

        return view('backend.template.entity-shareholding.entityshareholding-index', 
         [ 'users' => $users,'lists' => $lists,'files' => $files,'sum_total_share' => $sum_total_share,'sum_total_shareholding' => $sum_total_shareholding,'sum_total_cash' => $sum_total_cash,'sum_total_loan'=> $sum_total_loan ]);
    }

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
        $getid =implode(',', (array) $getarrayReq);
       
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