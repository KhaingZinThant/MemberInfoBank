<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AvoidFood;
use DataTables;

class avoidFoodCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if ($request->ajax()) {
            $data = AvoidFood::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                            
                           $btn =  '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->avoidFoodId.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editFood">Edit</a>';
                           
                           $btn =$btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->avoidFoodId.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteFood">Delete</a>';

                         
   
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('indexAvoidFood');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indexAvoidFood');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       AvoidFood::updateOrCreate(['avoidFoodDesc' => $request->avoidFoodDesc],
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
         $food = AvoidFood::find($id);
        return response()->json($food);
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
          $request->validate(['avoidFoodDesc'=>'required',
                            'active'=>'required',
                            ]);
          $avoidFoodVar=AvoidFood::find($id);  
          $avoidFoodVar->buildingDesc = $request->get('avoidFoodDesc');
          $avoidFoodVar->active = $request->get('active');
          $avoidFoodVar->remark = $request->get('remark');
          $avoidFoodVar->save();
        return redirect('/avoidFoodCN')->with('success','Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       AvoidFood::find($id)->delete();
       return response()->json(['success'=>'Food deleted successfully.']);
    }
}
