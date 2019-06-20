<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class schoolCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schoolVar=School::all();
        return view('indexSchool',compact('schoolVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schoolView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['schoolDesc'=>'required'
                            ]);
      $channelVar=new Channel(['schoolDesc'=>$request->get('schoolDesc'),
                                'active'=>$request->get('active'),
                                'remark'=>$request->get('remark')
               

      ]);
      $schoolVar->save();
      return redirect('/schoolCN')->with('success','Successfully');
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
        $schoolVar=School::find($id);
        return view('schoolEdit',compact('schoolVar')); 
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
          $schoolVar=Room::find($id);    
          $schoolVar->schoolDesc = $request->get('schoolDesc');
          $schoolVar->active = $request->get('active');
          $schoolVar->remark = $request->get('remark');
          $schoolVar->save();
        return redirect('/schoolCN')->with('success','Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $schoolVar = School::find($id);
           $schoolVar->delete();
           return redirect('/schoolCN')->with('success','Successfully deleted');
    }
}
