<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationYear;

class educationYearCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educationYearVar = EducationYear::all();
        return view('indexEducationYear',compact('educationYearVar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('educationYearView');
    }

    /**
     * Store a newly created resource in storage.
     *+
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate(['educationYearDesc'=> 'required',
                                'active'=> '',
                                'remark'=> '',
                            ]);

        $educationYearVar = new EducationYear ([
                            'educationYearDesc' =>$request->get('educationYearDesc'),
                            'active' =>$request->get('active'),
                            'remark' =>$request->get('remark'),


                        ]);
        $educationYearVar ->save();
        return redirect('/educationYearCN')->with('success','successfully Inserted');
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
        $educationYearVar = EducationYear::find($id);
        return view('educationYearEdit',compact('educationYearVar'));
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
        $request -> validate(['educationYearDesc'=> 'required',
                                'active'=> 'required',
                                'remark'=> 'required',
                            ]);
        $educationYearVar = EducationYear::find($id);
        $educationYearVar -> educationYearDesc = $request->get('educationYearDesc');
        $educationYearVar -> active = $request->get('active');
        $educationYearVar -> remark = $request->get('remark');
        $educationYearVar ->save();
        return redirect('/educationYearCN')->with('success','successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $educationYearVar = EducationYear::find($id); 
        $educationYearVar -> delete();
        return redirect('/educationYearCN')->with('delete','successfully deleted');
    }

   /*public function cbbox(Request $request)
{
   $request -> validate(['educationYearDesc'=> 'required',
                              'active'=> 'required',
                                'remark'=> 'required',
                            ]);
        $edu = educationYearMod::find($id);
        $edu -> educationYearDesc = $request->get('educationYearDesc');
        return redirect('/');

}*/

}
