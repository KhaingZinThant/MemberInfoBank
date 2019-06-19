<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
class cityCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cityVar=City::all();
        return view('indexCity',compact('cityVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('cityView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(['cityDesc'=>'required',
                            'active'=>'required',
                            'remark'=>'required']);
         $cityVar=new City(['cityDesc'=>$request->get('cityDesc'),
                        'active'=>$request->get('active'),
                        'remark'=>$request->get('remark')]);
         $cityVar->save();
         return redirect('/cityCN')->with('success','Successful');
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
        $cityVar=City::find($id);
        return view('cityEdit',compact('cityVar'));
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
          $request->validate(['cityDesc'=>'required',
                            'active'=>'required',
                            ]);
          $cityVar=City::find($id);     // City (model), $city ka edit bat ka har nae to
          $cityVar->cityDesc = $request->get('cityDesc');
          $cityVar->active = $request->get('active');
          $cityVar->remark = $request->get('remark');
        $City->save();
        return redirect('/cityCN')->with('success','Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $cityVar = City::find($id);
        $cityVar->delete();
        return redirect('/cityCN')->with('success','Successfully deleted');
    }
}
