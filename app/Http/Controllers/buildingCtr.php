<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Building;
use Datatables;

class buildingCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
    {
        
         if ($request->ajax()) {
            $data = Building::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                         // $btn = '<input type="checkbox" id="'.$row->cityId.'" name="someCheckbox" />';
                            
                             $btn =  '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->buildingId.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">
                             <i class="fa fa-pencil"></i></a>';
                           
                           $btn =$btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->buildingId.'" data-original-title="Delete" class="delete btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>';

                       
    

   
    
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
        //
        return view('');
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
    //     $request ->validate(['personDesc' => 'required'
                                        
    // ]);
    //   $personTypeVar=PersonType::find($id);

    //   $personTypeVar->personDesc=$request->get('personDesc');
    //   $personTypeVar->active=$request->get('active');
    //   $personTypeVar->remark=$request->get('remark');

    //   $personTypeVar->save();
    //   return redirect('/personTypeCN')->with('success','Successfully update');

         Building::update(['buildingDesc' => $request->buildingDesc],
                ['active' => $request->active, 'remark' => $request->remark]);        
   
         return response()->json(['success'=>'Data updated successfully.']);


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
