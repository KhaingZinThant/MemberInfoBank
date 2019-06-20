<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\PersonStatus;
use Datatables;

class personStatusCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
         if ($request->ajax()) {
            $data = PersonStatus::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                            
                             $btn =  '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->statusId.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                           
                           $btn =$btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->statusId.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                         
   
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('indexPersonStatus');
       
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
        
         PersonStatus::updateOrCreate(['statusDesc' => $request->statusDesc],
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
      $product = PersonStatus::find($id);
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
        $request ->validate(['statusDesc' => 'required'
                                        
    ]);
      $personStatusVar=PersonStatus::find($id);

      $personStatusVar->statusDesc=$request->get('statusDesc');
      $personStatusVar->active=$request->get('active');
      $personStatusVar->remark=$request->get('remark');

      $personStatusVar->save();
      return redirect('/personStatusCN')->with('success','Successfully update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         PersonStatus::find($id)->delete();
     
        return response()->json(['success'=>'Product deleted successfully.']);

    }
}
