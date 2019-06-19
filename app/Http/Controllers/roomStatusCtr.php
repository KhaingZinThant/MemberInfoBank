<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomStatus;

class roomStatusCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomStatusVar=RoomStatus::all();
        return view('indexRoomStatus',compact('roomStatusVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('roomStatusView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['roomStatusDesc'=>'required']);

        $roomStatusVar=new RoomStatus([
                'roomStatusDesc'=>$request->get('roomStatusDesc'),
                'active'=>$request->get('active'),
                'remark'=>$request->get('remark')]);

        $roomStatusVar->save();
        return redirect('/roomStatusCN')->with('success','Successfully Inserted!');
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
        $roomStatusVar=RoomStatus::find($id);
        return view('roomStatusEdit',compact('roomStatusVar'));
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
        $request->validate(['roomStatusDesc'=>'required']);

        $roomStatusVar= RoomStatus::find($id);
        $roomStatusVar->roomStatusDesc=$request->get('roomStatusDesc');
        $roomStatusVar->active=$request->get('active');
        $roomStatusVar->remark=$request->get('remark');

        $roomStatusVar->save();
        return redirect('/roomStatusCN')->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomStatusVar =RoomStatus::find($id);
        $roomStatusVar->delete();
        return redirect('/roomStatusCN')->with('delete','Successfully deleted!');
    }
}
