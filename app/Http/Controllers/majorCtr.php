<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Major;

class majorCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majorVar=Major::all();
        return view('indexMajor',compact('majorVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('majorView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(['majorDesc'=>'required']);

        $majorVar=new Major([
        'majorDesc'=>$request->get('majorDesc'),
        
        'active'=>$request->get('active'),
        'remark'=>$request->get('remark')
        ]);

        $majorVar->save();
        return redirect('/majorCN')->with('success','Successfully Inserted!');
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
        $majorVar=Major::find($id);
        return view('majorEdit',compact('majorVar'));
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
        $request->validate(['majorDesc'=>'required']);

        $majorVar=Major::find($id);
        $majorVar->majorDesc = $request->get('majorDesc');
        $majorVar->active = $request->get('active');
        $majorVar->remark = $request->get('remark');

        $majorVar->save();
        return redirect('majorCN')->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $majorVar = Major::find($id);
        $majorVar->delete();
        return redirect('majorCN')->with('delete','Successfully Deleted!');
    }

    
}
