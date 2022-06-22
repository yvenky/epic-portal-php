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
        $files= INVESTMENT::all();
        $lists = PROPERTY::whereHas('entity_id')->get();

        $entity_ids = ENTITY::pluck('id');
        $post_ids = PROPERTY::pluck('ENTITY_COMPANY');

        // $post = DB::table('INVESTMENT')
        // ->join('ENTITY', 'INVESTMENT.ENTITY_ID', '=', 'ENTITY.ID')
        // ->where('ENTITY_ID', '=', 'ENTITY.ID')
        // ->orderby('ID','ASC')
        // ->get();

            $sum_total_investment = DB::table('INVESTMENT')
            ->join('ENTITY', 'INVESTMENT.ENTITY_ID', '=', 'ENTITY.ID')
            ->where('ENTITY.ID', '=',$entity_ids )
            ->sum('INVESTMENT.TOTAL_SHARE');
            


        return view('backend.template.customer-profile.customer-profile-index',  [ 'users' => $users,'lists' => $lists,'files' => $files,
        'sum_total_investment' =>$sum_total_investment]);
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

    $sum_total_share = DB::table('INVESTMENT')
    ->join('ENTITY', 'INVESTMENT.ENTITY_ID', '=', 'ENTITY.ID')
    ->where('ENTITY_ID', '=', $id)
    ->sum('INVESTMENT.TOTAL_SHARE');
    
    $sum_total_shareholding = DB::table('INVESTMENT')
    ->join('ENTITY', 'INVESTMENT.ENTITY_ID', '=', 'ENTITY.ID')
    ->where('ENTITY_ID', '=', $id)
    ->sum('INVESTMENT.SHAREHOLDING');

    $sum_total_cash = DB::table('INVESTMENT')
    ->join('ENTITY', 'INVESTMENT.ENTITY_ID', '=', 'ENTITY.ID')
    ->where('ENTITY_ID', '=', $id)
    ->sum('INVESTMENT.CASH');

    $sum_total_loan = DB::table('INVESTMENT')
    ->join('ENTITY', 'INVESTMENT.ENTITY_ID', '=', 'ENTITY.ID')
    ->where('ENTITY_ID', '=', $id)
    ->sum('INVESTMENT.LOAN');

      
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
