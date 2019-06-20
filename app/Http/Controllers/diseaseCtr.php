<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease;

class diseaseCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseaseVar=Disease::all();
        return view('indexDisease',compact('diseaseVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('diseaseView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['diseaseDesc'=>'required'
                           
                        ]);
        $diseaseVar=new Disease([
        'diseaseDesc'=>$request->get('diseaseDesc'),
        'active'=>$request->get('active'),
        'remark'=>$request->get('remark')

        ]);
        $diseaseVar->save();
        return redirect('/diseaseCN')->with('success','Successfully');
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
         $diseaseVar=Disease::find($id);
        return view('diseaseView',compact('diseaseVar')); 
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
        $request->validate(['diseaseDesc'=>'required'               
        ]);
        $diseaseVar=Disease::find($id);
        $diseaseVar->diseaseDesc=$request->get('diseaseDesc');
        $diseaseVar->active=$request->get('active');
        $diseaseVar->remark=$request->get('remark');

        $diseaseVar->save();

        return redirect('/diseaseCN')->with('success','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diseaseVar=Disease::find($id);
        $diseaseVar->delete();
        return redirect('/diseaseCN')->with('delete','Successfully Deleted');
    }
}
