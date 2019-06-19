<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonType;
use DataTables;
class personTypeCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $data = PersonType::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                            
                             $btn =  '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->personId.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                           
                           $btn =$btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->personId.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                         
   
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('indexPersonType');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indexPersonType');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       PersonType::updateOrCreate(['personDesc' => $request->personDesc],
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
      $product = PersonType::find($id);
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
        $request ->validate(['personDesc' => 'required'
                                        
    ]);
      $personTypeVar=PersonType::find($id);

      $personTypeVar->personDesc=$request->get('personDesc');
      $personTypeVar->active=$request->get('active');
      $personTypeVar->remark=$request->get('remark');

      $personTypeVar->save();
      return redirect('/personTypeCN')->with('success','Successfully update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PersonType::find($id)->delete();
        return response()->json(['success'=>'Product deleted successfully.']);

    }
}
