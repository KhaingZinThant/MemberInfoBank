<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;

class careerCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $careerVar=Career::all();
        return view('indexCareer',compact('careerVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('careerView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function store(Request $request)
    {
        $request->validate(['careerDesc'=>'required',
                            'active'=>'required',
                            'remark'=>'required']);
        $careerVar=new Career([
            'careerDesc'=>$request->get('careerDesc'),
            'active'=>$request->get('active'),
            'remark'=>$request->get('remark')
         ]);//$varname=new modelname
        $careerVar->save();
         return redirect('/careerCN')->with('success','Successfully Inserted!');
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
         $careerVar=Career::find($id);//$variname=modelname
        return view('careerEdit',compact('careerVar'));//compact('variable')
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
         $request->validate(['careerDesc'=>'required',
                             'active'=>'required',
                             'remark'=>'required']);
         $careerVar=Career::find($id);
         $careerVar->careerDesc=$request->get('careerDesc');
         $careerVar->active=$request->get('active');
         $careerVar->remark=$request->get('remark');//->dbColname
         $careerVar->save();
         return redirect('/careerCN')->with('success','Successfully Updated!'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $careerVar=Career::find($id);
         $careerVar->delete();
         return redirect('/careerCN')->with('delete','Successfully Deleted!'); 
    }
}
