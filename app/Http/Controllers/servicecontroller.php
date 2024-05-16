<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_services;
use App\Models\db_citys;
use App\Models\db_users;


class servicecontroller extends Controller
{
    function servicemenu(Request $req)
    {
        $service = db_services::all();
        return view('client.servicehome',compact('service'));
    }

    function selectservice(Request $req,$servicename)
    {
        if (session()->has('client'))
        {
            $service = db_services::where(['service_name'=>$servicename])->first();
            $sid=$service->id;
            session()->put('service',$service);
            $user = session()->get('client');
            $mechanic = db_users::where(['city' => $user->city,'role_id' => 3])->get();
            return view('client.viewmechaniccity',compact('mechanic'));
        }
        else
        {
            return redirect()->route('login');
        }
       
    }    

    function ExteriorWashing(Request $req)
    {
        return view('client.ExteriorWashing');
    }
}
