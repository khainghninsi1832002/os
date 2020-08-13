<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        // dd($brands);
        return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('backend.brands.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                // dd($request);

        // Validation
        $request->validate([
            
            'name'=>'required',
            'photo'=>'required',
            
        ]);

   

        // If include file, upload
        // File Updoad 
        $imgName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend1/brandimg/'),$imgName);
        $myfile='backend1/brandimg/'.$imgName;
        unlink($request->photo);

        // Data insert
        $brand=new Brand;
        
        $brand->name=$request->name;
        $brand->photo=$myfile;

        $brand->save();

        // Redirect
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand=Brand::find($id);
        return view('backend.brands.show',compact('brand'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::find($id);
        return view('backend.brands.edit',compact('brand'));
        
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
        // dd($request);

        // Validation
        $request->validate([
            
            'name'=>'required',
            'photo'=>'sometimes',
            
        ]);

        // If include file, upload
        // File Updoad 
        if ($request->hasFile('photo')) {
            $imgName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend1/brandimg/'),$imgName);
            $myfile='backend1/brandimg/'.$imgName;
            //delete old photo(unlink)
            unlink($request->oldphoto);
        }else{
            $myfile=$request->oldphoto;
        }
        

        // Data insert
        $brand=Brand::find($id);
        
        $brand->name=$request->name;
        $brand->photo=$myfile;

        $brand->save();

        // Redirect
        return redirect()->route('brands.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand=Brand::find($id);
        $brand->delete();
        //redirect
        return redirect()->route('brands.index');

    }
}
