<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
user UserLevel;
use DataTables;

class userLevelCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($request->ajax()) {
            $data = UserLevel::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                            
                             $btn =  '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->userLevelId.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editUserLevel">Edit</a>';
                           
                           $btn =$btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->userLevelId.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteUserLevel">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indexUserLevel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         UserLevel::updateOrCreate(['userLevelDesc' => $request->userLevelDesc],
                ['active' => $request->active, 'remark' => $request->remark]);        
   
         return response()->json(['success'=>'Data saved successfully.']);
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
        $userLevel = UserLevel::find($id);
        return response()->json($userLevel);
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
          $userLevelVar=UserLevel::find($id);     // City (model), $city ka edit bat ka har nae to
          $userLevelVar->cityDesc = $request->get('cityDesc');
          $userLevelVar->active = $request->get('active');
          $userLevelVar->remark = $request->get('remark');
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
        UserLevel::find($id)->delete();
       return response()->json(['success'=>'Food deleted successfully.']);
    }
}
