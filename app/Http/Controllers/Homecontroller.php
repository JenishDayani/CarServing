<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_users;
use App\Models\db_profile;
use App\Models\DbOrder;
use App\Models\db_payment;
use App\Models\db_citys;
use App\Models\db_services;

use Illuminate\Support\Facades\Hash;


class Homecontroller extends Controller
{
    function Home(Request $req)
    {
        $city = db_citys::all();
        $req->session()->put('city',$city);                        

         $mechanic = db_profile::select('db_users.name','db_users.email','db_profiles.experience','db_profiles.u_id','db_users.image','db_users.id','db_profiles.con_number')
        ->join('db_users','db_users.id','db_profiles.u_id')
        ->where('db_users.action','ENABLE')
        ->get();        

        return view('client.Home',compact('mechanic'));
    }

    function innerprofile(Request $req,$id)
    {
        $s=db_services::all();
        $service = session()->get('service');
        $mechanic = db_profile::select('db_profiles.experience','db_profiles.u_id','db_users.name','db_users.contact','db_users.email','db_users.image','db_profiles.con_number','db_profiles.mechanic_fees')
        ->join('db_users','db_users.id','db_profiles.u_id')
        ->where('db_profiles.u_id',$id)
        ->first();

        return view('client.viewmechanic',compact('mechanic','service'));
    }

    function signup(Request $req)
    {
        $a = new db_users;
        if ($req->input('signup'))
        {
            $validated = $req->validate
            ([
                'name' => 'required',
                'email' => 'required|unique:db_users',
                'password' => 'required',
                'contact' => 'required',
                'city' => 'required',
            ]);

            $a->name =  $req->input('name');
            $a->email = $req->input('email');
            $a->password = Hash::make($req->input('password'));
            $a->role_id = $req->input('role');
            $a->city = $req->input('city');
            $a->contact = $req->input('contact');
            $a->action = 'PENDING';

            $a->save();  

            return redirect()->route('login');         
        }

        return view('client.signup');
    }

    function login(Request $req)
    {       
        if ($req->input('login'))
        {
            $validated = $req->validate
            ([
                'email' => 'required',
                'password' => 'required',
            ]);
            $email = $req->input('email');
            $user = db_users::where(['email'=>$email])->first();
            if($user)
            {
                if(Hash::check($req->input('password'),$user->password))
                {
                    if($user->role_id == 2)
                    {
                        $req->session()->put('client',$user);
                        return redirect()->route('/');
                    }
                    elseif ($user->role_id == 1)
                    {
                        $req->session()->put('admin',$user);
                        return redirect()->route('admin');
                    }
                    elseif($user->role_id == 3)
                    {
                        $req->session()->put('mechanic',$user);                        
                        return redirect()->route('mechanic');
                    }
                }
            }
        }
        return view('client.login');
    }

    function logout(Request $req)
    {
        if($req->session()->has('client'))
        {
            $req->session()->forget('client');
            return redirect()->route('/');
        }
        elseif($req->session()->has('admin'))
        {
            $req->session()->forget('admin');
            return redirect()->route('/');
        }
        elseif($req->session()->has('mechanic'));
        {
            $req->session()->forget('mechanic');
            return redirect()->route('/');
        }
        // return view('client.Home');
    }

    function payment(Request $req)
    {
        $a= new db_payment;
        $a->transaction_id = $req->input('razorpay_payment_id');
        $a->user_id = $req->input('user_id');
        $a->product_id = $req->input('product_id');
        $a->product_price = $req->input('product_price');
        $a->product_name = session()->get('service')->service_name;
        $a->save();

        $b = new DbOrder;
        $b->user_id=$req->input('user_id');
        $b->mechanic_id=$req->input('product_id');
        $b->services= '123';
        $b->save();

        return $req->input('product_price');
    }

    function about(Request $req)
    {
        return view('client.aboutpage');
    }

    function notificationstatus(Request $req)
    {        
        // return $count = db_users::where('role_id','=','3')->count();
        //  $mechanic = db_users::select('db_users.role_id','db_users.action')
        // ->join('db_profiles')
        // ->where('db_users.action','DISABLE')
        // ->get();


        $user = db_users::where(['action'=> 'PENDING'])->get();

        return view('notification',compact('user'));
    }


    function PendingEnable(Request $req,$id)
    {
        $user = db_users::find($id);
        $user->action = 'ENABLE';
        $user->save();
       return redirect()->route('notification');
    }

    function PendingDisable(Request $req,$id)
    {
        $user = db_users::find($id);
        $user->action = 'DISABLE';
        $user->save();
       return redirect()->route('notification');
    }

    function Extra(Request $req,$id,$sid)
    {
        return $id;
        $city = db_citys::all();        
        return view('extra',compact('city'));
    }

    function viewpayment(Request $req,$id)
    {
        $payment =  db_payment::select('db_payments.transaction_id','db_payments.product_name','db_payments.user_id','db_payments.product_price','db_users.name','db_users.email','db_users.image')
        ->join('db_users','db_users.id','db_payments.user_id')
        ->where('product_id',$id)
        ->get();
        return view('mechanic.viewpayment',compact('payment','id'));
    }

    function editprofile(Request $req,$id)
    {
        $verify = db_users::find($id);
        return view('client.editprofile',compact('verify'));
    }

    function updateprofile(Request $req,$id)
    {
        if ($req->input('update'))
        {            
            $a = db_users::find($id);

            $a->name = $req->input('name');  
            $a->email = $req->input('email');
            $a->city = $req->input('city');
            $a->contact = $req->input('contact');
            $a->save();  

            $req->session()->put('client',$a);

        }
        return redirect()->route('editprofile',$id);
    }
}
