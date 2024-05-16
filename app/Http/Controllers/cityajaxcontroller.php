<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_citys;
use App\Models\db_state;


class cityajaxcontroller extends Controller
{
    function Ajax(Request $req)
    {
        if($req->input('display')==1)
        {
            return db_citys::all();
        }


        if ($req->input('add')==1) {
            $c= new db_citys;
            $c->cityname=$req->input('city');
            $c->save();
            return "Success";
        }
        return view('city');
    }


    function Home(Request $req)
    {   

        if ($req->input('sel')==1)
        {
            return $city = db_citys::all();
            exit();
        }

        return view('managecity');
    }

    function addcityajax(Request $req)
    {
        $city = new db_citys;
        if ($req->input('add')==1)
        {
            $city->cityname = $req->input('cityname');
            $city->save();
        }       
    }

    function editcityajax(Request $req)
    {

        if ($req->input('edit')==1)
        { 
            return $city = db_citys::find($req->input('id'));
            
        }
    }

    function deletecityajax(Request $req)
    {
        if ($req->input('delete')==1)
        {
            $city = db_citys::find($req->input('id'));
            $city->delete();
        }
    }

    function addstateajax(Request $req)
    {
        $state = new db_state;
        if ($req->input('add')==1)
        {
            $state->state_name = $req->input('state');
            $state->save();
        }
    }

    function viewstate(Request $req)
    {
        if ($req->input('sel')==1)
        {
            return $state = db_state::all();
        }
        return view('managecity');
    }

    function editstate(Request $req)
    {
        if ($req->input('edit')==1)
        {
           return $state = db_state::find($req->input('id'));
        }
    }

    function deletestate(Request $req)
    {
        if ($req->input('delete')==1)
        {
            $state = db_state::find($req->input('id'));
            $state->delete();            
        }
    }

    function addcityarea(Request $req)
    {
        if ($req->input('add')==1)
        {
            return 'hello';
        }
    }

    function tushal(Request $req)
    {
        return $data = db_state::all();
    }
}