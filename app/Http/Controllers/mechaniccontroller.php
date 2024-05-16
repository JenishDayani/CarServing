<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\db_users;
use App\Models\db_payment;
use App\Models\db_profile;
use App\Models\db_feedback;
use Illuminate\Support\Facades\Hash;

class mechaniccontroller extends Controller
{
    // public function Home()
    // {
    //     return view('mechanic.home');
    // }

    public function add(Request $req)
    {
        $a = new db_users;

        if ($req->input('Addmechanic'))
        {
          $a->name = $req->input('m_name');
          $a->action = 'PENDING';
          $a->email = $req->input('m_email');
          $a->password = hash::make($req->input('m_password'));
          $a->role_id = 3;
          if ($req->has('m_photo')) 
          {   
            $image = $req->file('m_photo');
            $filename = $image->getClientOriginalName(); 
            $path ="Uploadchanicalimage/";   
            $image->move($path,$filename);
            $a->image = $filename;   
        }
        $a->save();
        return redirect()->route('viewmechanic');

    }
    return view('Addmechanic');
}

public function view(Request $req)
{
    $verify = db_users::where(['action'=>'ENABLE'])->orwhere(['action'=>'DISABLE'])->where(['role_id'=> '3'])->get();
    return view('viewmechanic',compact('verify'));
}

public function edit(Request $req,$id)
{
    $hello = db_users::find($id);
    return view('editmechanic',compact('hello'));
}

function update(Request $req,$id)
{

    $a = db_users::find($id);
    if($req->input('update_mechanic'))
    {
        $a->name = $req->input('m_name');
        $a->email = $req->input('m_email');
    }

    if ($req->has('update_image'))
    {
     $image = $req->file('update_image');
     $filename = $image->getClientOriginalName();
     $path = 'Uploadchanicalimage/';
     $image->move($path,$filename);
     $a->image = $filename;
 }

 $a->save();


 return redirect()->route('viewmechanic');
}

function status(Request $req,$id)
{   
    $a = db_users::find($id);
    if ($a->action == 'DISABLE')
    {
        $a->action ="ENABLE";
    }
    else
    {
        $a->action = 'DISABLE';
    }
    $a->save();
    return redirect()->route('sendemailstatus',compact('id'));
}

    // function adminhome(Request $req)
    // {
    //     return view('Home');
    // }

function delete(Request $req,$id)
{
    $delete = db_users::find($id);
    $delete->delete();
    return redirect()->route('viewmechanic');
}

function city(Request $req)
{
    return view('client.viewmechaniccity');
}

function timeallocation(Request $req)
{
    $sid = session()->get('mechanic')->id;
    $user = db_payment::where(['product_id' => $sid])->get();

    $mechanic = db_payment::select('db_users.name','db_payments.user_id','db_payments.product_name')
    ->join('db_users','db_users.id','db_payments.user_id')
    ->where('db_payments.product_id',$sid)
    ->get();        




    return view('mechanic.timeallocation',compact('mechanic'));
}

function time(Request $req,$id)
{
    $sid = session()->get('mechanic')->id;

    $user = db_payment::select('db_users.name','db_payments.user_id','db_payments.product_name','db_users.email')
    ->join('db_users','db_users.id','db_payments.user_id')
    ->where('db_payments.product_id',$sid)
    ->where('db_users.id',$id)
    ->first();

    if ($req->input('send')) {

        $date = $req->input('date');
        $time = $req->input('time');

        $details = [
            'title' => 'OnMechanic To your services fast' ,
            'body' => 'This is for testing email using devloper',
            'description' => 'Mail from Online Mechanic Service From Owner Of Jenish Dayani',
            'port' => 'Your Garage is Sechdule on '.$date .' at '.$time ,
        ];   
        \Mail::to($user->email)->send(new \App\Mail\MyTestMail($details));
        return redirect()->route('mechanic');


    }
    return view('mechanic.time',compact('user'));
}

function mechanicfeedback(Request $req)
{
    if ($req->Session()->has('mechanic'))
    {
        $a = $req->Session()->get('mechanic');
    }

    $newdata = new db_feedback;

    if ($req->input('sendfeed'))
    { 

        $validated = $req->validate
        ([
            'mechanicfeed' => 'required',
        ]); 

        $newdata->feed = $req->input('mechanicfeed');
        $newdata->u_id = $a->id;
        $newdata->save();            
    }


    $verify = db_users::select('db_users.id','db_users.name','db_users.email','db_feedbacks.feed')
    ->join('db_feedbacks','db_feedbacks.u_id','db_users.id')
    ->where('db_users.role_id',3)
    ->get();

    return view('mechanic.feedback',compact('verify'));
}

function clientfeedback(Request $req)
{    

    if ($req->Session()->has('client'))
    {
        $a = $req->Session()->get('client');
    }

    $client = db_feedback::where('u_id',$a->id)->first();

    $newdata = new db_feedback;

    if ($req->input('sendfeed'))
    {  
      $validated = $req->validate
      ([
        'clientfeedback' => 'required',
    ]);

      $newdata->feed = $req->input('clientfeedback');
      $newdata->u_id = $a->id;
      $newdata->save();            
  }

    $verify = db_users::select('db_users.id','db_users.name','db_users.email','db_feedbacks.feed')
  ->join('db_feedbacks','db_feedbacks.u_id','db_users.id')
  ->where('db_users.role_id',2)
  ->get();


  return view('client.feedback',compact('verify'));
}

function Aboutmechanic(Request $req)
{
    return view('mechanic.aboutus');
}

function privatepolicymechanic(Request $req)
{
    return view('mechanic.privatepolicy');
}

function contactusmechanic(Request $req)
{
    return view('mechanic.contactus');
}
}
