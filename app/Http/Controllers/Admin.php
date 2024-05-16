<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_feedback;
use App\Models\db_payment;;
use App\Models\db_services;
use App\Models\db_users;

class Admin extends Controller
{
    function Home(Request $req)
    {
        if ($req->session()->has('admin'))
        {
            $s = $req->session()->has('admin');
        }
        elseif($req->session()->has('mechanic'))
        {
            $a = $req->session()->has('mechanic');
        }
        else
        {
            return redirect()->route('/');
        }
        return view('Home');
    }

    // contact us page in client panel
    function Admincontact()
    {
        return view('client.contact');
    }

    function deleteclient(Request $req,$id)
    {
        $delete = db_users::find($id);
        $delete->delete();
        return redirect()->route('viewclient');
    }

    function privatepolicy()
    {
        return view('client.private policy');
    }

    function serviceajax(Request $req)
    {

        if($req->input('display')==1)
        {
            return db_services::all();
        }


        if($req->input('add')==1)
        {
            $s=new db_services;
            $s->service_name=$req->input('service');
            $s->service_price=$req->input('price');
            $s->service_description=$req->input('description');
            $s->save();
           
            return "Success";
        }
        return view('services');
    }

    function viewclient(Request $req)
    {
        $client = db_users::where(['role_id' => '2'])->get();
        return view('viewclient',compact('client'));
    }

    function adminclient(Request $r)
    {
       $client = db_users::select('db_users.id','db_users.name','db_users.email','db_feedbacks.feed')
       ->join('db_feedbacks','db_feedbacks.u_id','db_users.id')
       ->where('db_users.role_id',2)
       ->get();

       return view('clientfeedback',compact('client'));
    }

    function adminmechanic(Request $r)
    {
        $mechanic = db_users::select('db_users.id','db_users.name','db_users.email','db_feedbacks.feed')
       ->join('db_feedbacks','db_feedbacks.u_id','db_users.id')
       ->where('db_users.role_id',3)
       ->get();

       return view('mechanicfeedback',compact('mechanic'));
    }

    function deletefeedback(Request $req,$id)
    {
        $client = db_feedback::where(['u_id' => $id ])->first();
        $client->delete();

        return redirect()->route('adminclientfeed');
    }

    function deletefeedbackmechanic(Request $req,$id)
    {
        $client = db_feedback::where(['u_id' => $id ])->first();
        $client->delete();

        return redirect()->route('adminmechanicfeed');
    }

    function viewpaymentadmin(Request $req)
    {
        $verify =  db_payment::select('db_payments.transaction_id','db_payments.product_name','db_payments.user_id','db_payments.product_price','db_users.name','db_users.email','db_users.image','db_payments.product_id','db_profiles.mechanic_name','db_payments.id')
        ->join('db_users','db_users.id','db_payments.user_id')
        ->join('db_profiles','db_profiles.u_id','db_payments.product_id')
        ->get();
        return view('viewpaymentadmin',compact('verify'));
    }
}
