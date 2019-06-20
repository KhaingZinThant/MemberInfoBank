<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\City;
use Datatables;

class cityCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
         if ($request->ajax()) {
            $data = City::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                            
                             $btn =  '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->cityId.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                           
                           $btn =$btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->cityId.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                         
   
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('indexCity');
       
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
        
         City::updateOrCreate(['cityDesc' => $request->cityDesc],
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
    // public function edit($id)
    // {
    //   $product = City::find($id);
    //     return response()->json($product);
    // }
     public function edit($id)
    {
        if(request()->ajax())
        {
            $product = City::findOrFail($id);
            return response()->json([$product]);
        }
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
    //     $request ->validate(['cityDesc' => 'required'
                                        
    // ]);
    //   $cityVar=City::find($id);

    //   $cityVar->cityDesc=$request->get('cityDesc');
    //   $cityVar->active=$request->get('active');
    //   $cityVar->remark=$request->get('remark');

    //   $cityVar->save();
    //   return redirect('/cityCN')->with('success','Successfully update');
            


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         City::find($id)->delete();
     
         return response()->json(['success'=>'Product deleted successfully.']);
       
    }
}
