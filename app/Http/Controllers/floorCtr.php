<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Floor;
class floorCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $floorVar=Floor::all();
        return view('indexFloor',compact('floorVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('floorView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate(['floorDesc'=>'required'
                           
                        ]);
        $floorVar=new Floor([
        'floorDesc'=>$request->get('floorDesc'),
        'active'=>$request->get('active'),
        'remark'=>$request->get('remark')

        ]);
        $floorVar->save();
        return redirect('/floorCN')->with('success','Successfully');
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
        
        $floorVar=Floor::find($id);
        return view('floorEditView',compact('floorVar')); 
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
         $request->validate(['floorDesc'=>'required'               
        ]);
        $floorVar=Floor::find($id);
        $floorVar->floorDesc=$request->get('floorDesc');
        $floorVar->active=$request->get('active');
        $floorVar->remark=$request->get('remark');

        $floorVar->save();

        return redirect('/floorCN')->with('success','Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $floorVar=Floor::find($id);
        $floorVar->delete();
        return redirect('/floorCN')->with('delete','Successfully Deleted');
    }
}
