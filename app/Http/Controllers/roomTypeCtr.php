<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomType;
class roomTypeCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomTypeVar=RoomType::all();
        return view('indexRoomType',compact('roomTypeVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomTypeView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['roomTypeDesc'=>'required',
                            'active'=>'required',
                            'remark'=>'required'
                        ]);
        $roomTypeVar=new RoomType([
        'roomTypeDesc'=>$request->get('roomTypeDesc'),
        'active'=>$request->get('active'),
        'remark'=>$request->get('remark')

        ]);
        $roomTypeVar->save();
        return redirect('/roomTypeCN')->with('success','Successfully Inserted!');
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
        $roomTypeVar=RoomType::find($id);
        return view('roomTypeEditView',compact('roomTypeVar'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(['roomTypeDesc'=>'required'
                            
                            

        ]);
        $roomTypeVar=RoomType::find($id);
        $roomTypeVar->roomTypeDesc=$request->get('roomTypeDesc');
        $roomTypeVar->active=$request->get('active');
        $roomTypeVar->remark=$request->get('remark');

        $roomTypeVar->save();

        return redirect('/roomTypeCN')->with('delete','Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomTypes=RoomType::find($id);
        $roomTypes->delete();
        return redirect('/roomTypeCN')->with('success','Successfully Deleted');
    }
}
