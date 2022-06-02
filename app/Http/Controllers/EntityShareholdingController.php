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
        //
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
        $lists=INVESTMENT::find($id);
        $users = INVESTOR::all();

        return view('backend.template.entity-shareholding.entity-shareholding-edit' , ['lists' => $lists, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $lists=DB::table('INVESTMENT')->where('ID',$id)->delete();

        return back()->with('success-message-delete',' Deleted Successfully');
    }
}
