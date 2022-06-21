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

class CustomerProfilehomeController extends Controller
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
        return view('backend.template.customer-profile.customer-profile-index',  [ 'users' => $users,'lists' => $lists,'files' => $files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    public function view($id)
    {
        $users=ENTITY::find($id);

        $files = INVESTMENT::with('entity_select')
    ->whereHas('entity_select', function($q) use ($id) {
        $q->where('ENTITY_ID', $id);
    })->get();
    $sum_total_share = DB::table("INVESTMENT")->sum('TOTAL_SHARE');
    $sum_total_shareholding = DB::table("INVESTMENT")->sum('SHAREHOLDING');
    $sum_total_cash = DB::table("INVESTMENT")->sum('CASH');
    $sum_total_loan = DB::table("INVESTMENT")->sum('LOAN');

      
        return view('backend.template.customer-profile.customer-entity-view' , ['lists' => $users, 'id' => $id,'files'=>$files,'sum_total_share' => $sum_total_share,'sum_total_shareholding' => $sum_total_shareholding,'sum_total_cash' => $sum_total_cash,'sum_total_loan'=> $sum_total_loan]);
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
