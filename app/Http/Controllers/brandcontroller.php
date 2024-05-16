<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DbBrand;

class brandcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $brand = DbBrand::all(); 
       return view('viewbrand',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addbrand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new DbBrand;
        if ($request->input('addbrand'))
        {            
            $brand->brand_name = $request->input('b_name');
            $brand->save();
            return redirect()->route('brand.index');
        }
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
        $brand = DbBrand::find($id);
        return view('edit',compact('brand'));
        // echo "hello";    
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
        $brand = DbBrand::find($id);
        $brand->brand_name = $request->input('b_name');
        $brand->save();
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = DbBrand::find($id);
        $brand->delete();
        return redirect()->route('brand.index');
    }
}
