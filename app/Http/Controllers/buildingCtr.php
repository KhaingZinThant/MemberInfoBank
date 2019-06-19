<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use DataTables;

class buildingCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($request->ajax()) {
            $data = Building::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                            
                             $btn =  '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->personId.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                           
                           $btn =$btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->buildingId.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                         
   
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('indexBuilding');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildingView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Building::updateOrCreate(['buildingDesc' => $request->buildingDesc],
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
        $product = Building::find($id);
        return response()->json($product);
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
         $request->validate(['buildingDesc'=>'required',
                            'active'=>'required',
                            ]);
          $buildingVar=Building::find($id);  
          $buildingVar->buildingDesc = $request->get('buildingDesc');
          $buildingVar->active = $request->get('active');
          $buildingVar->remark = $request->get('remark');
        $buildingVar->save();
        return redirect('/buildingCN')->with('success','Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Building::find($id)->delete();
       return response()->json(['success'=>'Product deleted successfully.']);
    }
}
