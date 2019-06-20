<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nationality;

class nationalityCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nationalityVar=Nationality::all();
        return view('indexNationality',compact('nationalityVar'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nationallityView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nationalityDesc'=>'required']);

        $nationalityVar=new Nationality([
        'nationalityDesc'=>$request->get('nationalityDesc'),
        
        'active'=>$request->get('active'),
        'remark'=>$request->get('remark')
        ]);

        $nationalityVar->save();
        return redirect('/nationalityCN')->with('success','Successfully Inserted');
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
        $nationalityVar=Nationality::find($id);
        return view('nationalityEdit',compact('nationalityVar'));
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
        $request->validate(['nationalityDesc'=>'required']);

        $nationalityVar=Nationality::find($id);
        $nationalityVar->nationalityDesc = $request->get('nationalityDesc');
        $nationalityVar->active = $request->get('active');
        $nationalityVar->remark = $request->get('remark');

        $national->save();
        return redirect('nationalityCN')->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nationalityVar = Nationality::find($id);
        $nationalityVar->delete();
        return redirect('nationalityCN')->with('delete','Successfully Deleted!');
    }
}
