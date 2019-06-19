<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Religion;

class religionCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $religionVar=Religion::all();
        return view('indexReligion',compact('religionVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('religionView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['religionDesc'=>'required']);

        $religionVar=new Religion([
                'religionDesc'=>$request->get('religionDesc'),
                'active'=>$request->get('active'),
                'remark'=>$request->get('remark')]);

        $religionVar->save();
        return redirect('/religionCN')->with('success','Successfully Inserted!');
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
       $religionVar=Religion::find($id);
       return view('religionEdit',compact('religionVar'));
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
        $request->validate(['religionDesc'=>'required']);

        $religionVar= Religion::find($id);
        $religionVar->religionDesc=$request->get('religionDesc');
        $religionVar->active=$request->get('active');
        $religionVar->remark=$request->get('remark');

        $religionVar->save();
        return redirect('/religionCN')->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $religionVar =Religion::find($id);
        $religionVar->delete();
        return redirect('/religionCN')->with('delete','Successfully deleted!');
    }
}
