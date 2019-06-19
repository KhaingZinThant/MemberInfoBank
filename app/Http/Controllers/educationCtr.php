<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class educationCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educationVar = Education::all();
        return view('indexEducation',compact('educationVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('educationView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate(['educationDesc'=> 'required',
                                'active'=> '',
                                'remark'=> '',
                            ]);

        $educationVar = new Education ([
                            'educationDesc' =>$request->get('educationDesc'),
                            'active' =>$request->get('active'),
                            'remark' =>$request->get('remark'),


                        ]);
        $educationVar ->save();
        return redirect('/educationCN')->with('success','successfully Inserted!');
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
        $educationVar = Education::find($id);
        return view('educationEdit',compact('educationVar'));
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
        $request -> validate(['educationDesc'=> 'required',
                                'active'=> 'required',
                                'remark'=> 'required',
                            ]);
        $educationVar = Education::find($id);
        $educationVar -> educationDesc = $request->get('educationDesc');
        $educationVar -> active = $request->get('active');
        $educationVar -> remark = $request->get('remark');
        $educationVar ->save();
        return redirect('/educationCN')->with('success','successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $educationVar = Education::find($id); 
        $educationVar ->delete();
        return redirect('/educationCN')->with('delete','successfully deleted!');
    }
}
