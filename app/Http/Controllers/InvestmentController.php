<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models;
use App\Models\PROPERTY;
use App\Models\INVESTMENT;
use App\Models\ENTITY_PROPERTIES;
use App\Models\INVESTOR;
use App\Models\ENTITY;
use DB;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $getvalues = ENTITY_PROPERTIES::all();
        $users =  INVESTOR::all();
        $entitys= ENTITY::all();
        $propertys = PROPERTY::all();
        $files= INVESTMENT::all();

        

    
    return view('backend.template.entity-shareholding.entity-newpartner-add',  [ 'users' => $users,'propertys' => $propertys,'entitys' => $entitys,'files' => $files ,'getvalues'=>$getvalues]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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

            'INVESTOR_ID'               =>'required',
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
        
        
 

    $getlastid=DB::table('ENTITY_PROPERTIES')->orderBy('id','desc')->first(); 
    $getId= $getlastid->ID;
    $get_entity=$getlastid->ENTITY_SELECT;
       
      
        $data = new INVESTMENT();
 
        $data-> INVESTOR_ID                         = $request-> INVESTOR_ID;
        $data-> ENTITY_ID                           = $get_entity;
        $data-> ENTITY_PROPERTIES_ID                = $getId;
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
