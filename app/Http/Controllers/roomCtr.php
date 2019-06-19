<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use DataTables;
class roomCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Datatables::of(User::query())->make(true);
        $roomVar=Room::all();        
       return view('indexRoom',compact('roomVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('roomView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(['roomDesc'=>'required',
                            'active'=>'required',
                            'remark'=>'required']);
         $roomVar=new Room(['roomDesc'=>$request->get('roomDesc'),
                        'active'=>$request->get('active'),
                        'remark'=>$request->get('remark')]);
         $roomVar->save();
         return redirect('/roomCN')->with('success','Successful');
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
        $roomVar=Room::find($id);
        return view('roomEdit',compact('roomVar'));
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
         $request->validate(['roomDesc'=>'required'
                            ]);
          $roomVar=Room::find($id);    
          $roomVar->roomDesc = $request->get('roomDesc');
          $roomVar->active = $request->get('active');
          $roomVar->remark = $request->get('remark');
          $roomVar->save();
        return redirect('/roomCN')->with('success','Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $roomVar = Room::find($id);
        $roomVar->delete();
        return redirect('/roomCN')->with('success','Successfully deleted');
    }
}
