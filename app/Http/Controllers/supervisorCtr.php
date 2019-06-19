<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supervisor;

class supervisorCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $supervisorVar=Supervisor::all();
        return view('indexSupervisor',compact('supervisorVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisorView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['supervisorDesc'=>'required',
                             'supervisorPhno'=>'required',
                             'supervisorEmail'=>'required',
                             'supervisorAddress'=>'required'
                           ]);

    $supervisorVar=new Supervisor(['supervisorDesc'=>$request->get('supervisorDesc'),
                                'supervisorPhno'=>$request->get('supervisorPhno'),
                                'supervisorEmail'=>$request->get('supervisorEmail'),
                                'supervisorAddress'=>$request->get('supervisorAddress'),
                               'active'=>$request->get('active'),
                                'remark'=>$request->get('remark')
                                
                            ]);
    $supervisorVar->save();
    return redirect('supervisorCN')->with('success','Successfully');


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
        $supervisorVar=Supervisor::find($id);
        return view('supervisorEdit',compact('supervisorVar'));
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
        $request->validate(['supervisorDesc'=>'required',
                             'supervisorPhno'=>'required',
                             'supervisorEmail'=>'required',
                             'supervisorAddress'=>'required'
                            ]);
            $supervisorVar=Supervisor::find($id);

            $supervisorVar->supervisorDesc = $request->get('supervisorDesc');
            $supervisorVar->supervisorPhno = $request->get('supervisorPhno');
            $supervisorVar->supervisorEmail = $request->get('supervisorEmail');
            $supervisorVar->supervisorAddress = $request->get('supervisorAddress');
            $supervisorVar->active = $request->get('active');
            $supervisorVar->remark = $request->get('remark');
            


    $supervisorVar->save();
    return redirect('supervisorCN')->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supervisorVar = Supervisor::find($id);
        $supervisorVar->delete();
        return redirect('supervisorCN')->with('delete','Successfully Delete');
    }
}
