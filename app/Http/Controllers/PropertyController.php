<?php

namespace App\Http\Controllers;
use App\Http\Controllers\entityController;
use Illuminate\Http\Request;
use App\Models\PROPERTY;
use App\Models\ENTITY;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // return view('backend.template.property.add-new-property');
        $lists = PROPERTY::all();
        $users=ENTITY::all();

        return view('backend.template.property.add-new-property',  ['lists' => $lists, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        
        $req->validate([

        'PROPERTY_ADDRESS'        => 'required',    
        'GOOGLE_COORDINATES'      => 'required',      
        'ENTITY_COMPANY'          => 'required',    
        'NO_OF_ACRES'             => 'required',       
        'MAP_URL'                 => 'required',  
        'PROPERTY_DOCUMENTS'      => 'required', 
        'PURCHASE_PRICE'          => 'required',          
        'COST_PER_ACRE'           => 'required', 
        'POTENTIAL_PER_ACRE'      => 'required', 
        'POTENTIAL_MARKET_VALUE'  => 'required',      
        ]);


        $data  = new PROPERTY();

        $data -> PROPERTY_ADDRESS               = $req-> PROPERTY_ADDRESS; 
        $data -> GOOGLE_COORDINATES             = $req-> GOOGLE_COORDINATES; 
        $data -> ENTITY_COMPANY                 = $req-> ENTITY_COMPANY; 
        $data -> NO_OF_ACRES                    = $req-> NO_OF_ACRES ; 
        $data -> MAP_URL                        = $req-> MAP_URL; 
        $data -> PROPERTY_DOCUMENTS             = $req-> PROPERTY_DOCUMENTS; 
        $data -> PURCHASE_PRICE                 = $req-> PURCHASE_PRICE; 
        $data -> COST_PER_ACRE                  = $req-> COST_PER_ACRE; 
        $data -> POTENTIAL_PER_ACRE             = $req-> POTENTIAL_PER_ACRE; 
        $data -> POTENTIAL_MARKET_VALUE         = $req-> POTENTIAL_MARKET_VALUE; 
        
        $data ->save();

        return redirect('property-submit-confirmation/'. $data->id )->with('success-message', 'New Property Added Successfully');
        //return redirect('property-list' )->with('success-message', 'New Property Added Successfully');
        
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

    public function show_list(){
        $lists= PROPERTY::all();

        return view('backend.template.property.property-list' , ['lists' => $lists]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lists= PROPERTY::find($id);
      
        return view('backend.template.property.property-view' , ['lists' => $lists, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lists= PROPERTY::find($id);
        $users=ENTITY::all();
      
        return view('backend.template.property.property-list-edit' , ['lists' => $lists, 'users' => $users]);
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

        $lists = DB::table('PROPERTY')
        ->where('PROPERTY.id', $id)
        ->update([
            'PROPERTY_ADDRESS'                         => $req-> PROPERTY_ADDRESS,
            'GOOGLE_COORDINATES'                        => $req-> GOOGLE_COORDINATES,
            'ENTITY_COMPANY'                            => $req-> ENTITY_COMPANY,
            'NO_OF_ACRES'                               => $req->NO_OF_ACRES,
            'MAP_URL'                                   => $req-> MAP_URL,
            'PROPERTY_DOCUMENTS'                        =>$req->PROPERTY_DOCUMENTS,
            'PURCHASE_PRICE'                            =>$req->PURCHASE_PRICE,
            'COST_PER_ACRE'                             =>$req->COST_PER_ACRE,
            'POTENTIAL_PER_ACRE'                        =>$req->POTENTIAL_PER_ACRE,    
            'POTENTIAL_MARKET_VALUE'                    =>$req->POTENTIAL_MARKET_VALUE,      
        ]);
        return redirect('property-list')->with('success-message-edit', $req-> PROPERTY_ADDRESS. ' Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * 
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //$lists = PROPERTY::find($id);
        //$lists->delete();
        $lists=DB::table('PROPERTY')->where('id',$id)->delete();
      
        return back()->with('success-message-delete', ' Deleted Successfully');

    }

    public function confirmation($id )
    {
        $lists= PROPERTY::find($id);
        return view('backend.template.property.property-submit-confirmation' , ['lists' => $lists]);
    }
}
