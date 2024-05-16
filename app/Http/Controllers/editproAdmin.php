<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_users;

class editproAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'jwke';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $verify = db_users::find($id);
        return view('editprofileAdmin',compact('verify'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        // $a = new db_users;
        $a = db_users::find($id);
        if($req->input('editadmin'))
        {
            $a->name = $req->input('adminname');
            $a->email = $req->input('adminemail');
            $a->save(); 

            return redirect()->route('editproAdmin.edit',$a->id);
        }

        return redirect()->route('editproAdmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return 'fjkl';
        //
    }
}
