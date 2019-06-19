<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class channelCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channelVar=Channel::all();
        return view('indexChannel',compact('channelVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('channelView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate(['channelDesc'=>'required'
                            ]);
      $channelVar=new Channel(['channelDesc'=>$request->get('channelDesc'),
                                'active'=>$request->get('active'),
                                'remark'=>$request->get('remark')
               

      ]);
      $channelVar->save();
      return redirect('/channelCN')->with('success','Successfully');
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
        $channelVar=Channel::find($id);
        return view('/channelEdit',compact('channelVar'));
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
        $request->validate(['channelDesc'=>'required'
        ]);
        $channelVar=Channel::find($id);
        $channelVar->channelDesc=$request->get('channelDesc');
        $channelVar->active=$request->get('active');
        $channelVar->remark=$request->get('remark');
        $channelVar->save();
        return redirect('/channelCN')->with('success','Successfully Updated');
               
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $channelVar=Channel::find($id);
        $channelVar->delete();
        return redirect('/channelCN')->with('success','Successfully Deleted');
                
    }
}
