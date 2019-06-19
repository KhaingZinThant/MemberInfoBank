<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonStatus;

class personStatusCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $personStatusVar=PersonStatus::all();
        return view ('indexPersonStatus',compact("personStatusVar"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('personStatusView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
    $request ->validate(['statusDesc' => 'required'
                                          
    ]);
        $personStatusVar=new PersonStatus([
            'statusDesc'=> $request->get('statusDesc'),
            'active' =>$request ->get('active'),
            'remark'=>$request->get('remark')
            ]);
            $personStatusVar->save();
        return redirect('/personStatusCN') -> with('success','Successfully Inserted!');
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
         $personStatusVar=PersonStatus::find($id);
        return view ('personStatusEdit',compact("personStatusVar"));
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
        $request ->validate(['statusDesc' => 'required'
                                        
    ]);
      $personStatusVar=PersonStatus::find($id);

      $personStatusVar->statusDesc=$request->get('statusDesc');
      $personStatusVar->active=$request->get('active');
      $personStatusVar->remark=$request->get('remark');

      $personStatusVar->save();
      return redirect('/personStatusCN')->with('success','Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personStatusVar=PersonStatus::find($id);
         $personStatusVar->delete();
         return redirect('/personStatusCN')->with('delete','Successfully deleted!');
    }
}
