<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;

class buildingCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildingVar=Building::all();
        return view('indexBuilding',compact('buildingVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildingView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['buildingDesc'=>'required',
                            'active'=>'required',
                            'remark'=>'required']);
         $buildingVar=new Building(['buildingDesc'=>$request->get('buildingDesc'),
                        'active'=>$request->get('active'),
                        'remark'=>$request->get('remark')]);
         $buildingVar->save();
         return redirect('/buildingCN')->with('success','Successful');
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
        $buildingVar=Building::find($id);
        return view('buildingEdit',compact('buildingVar'));
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
         $request->validate(['buildingDesc'=>'required',
                            'active'=>'required',
                            ]);
          $buildingVar=Building::find($id);  
          $buildingVar->buildingDesc = $request->get('buildingDesc');
          $buildingVar->active = $request->get('active');
          $buildingVar->remark = $request->get('remark');
        $buildingVar->save();
        return redirect('/buildingCN')->with('success','Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buildingVar = Building::find($id);
        $buildingVar->delete();
        return redirect('/buildingCN')->with('delete','Successfully deleted');
    }
}
