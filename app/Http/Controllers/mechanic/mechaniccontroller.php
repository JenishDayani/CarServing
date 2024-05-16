<?php

namespace App\Http\Controllers\mechanic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\db_users;
use  App\Models\db_profile;

class mechaniccontroller extends Controller
{
    function Home(Request $req)
    {
        return view('mechanic.Home');
    }

    function profile(Request $req)
    {
        if ($req->session()->has('mechanic'))
        {
            $m = $req->session()->get('mechanic');
        }

        $user = db_users::find($m->id);
        $mechanic = db_profile::where('u_id',$m->id)->first();        

        if ($req->input('update_profile'))
        {
            if ($mechanic)
            {
               
                    $mechanic->experience = $req->input('experience');
                    $mechanic->mechanic_fees = $req->input('mechanic_fees');
                    $mechanic->mechanic_name = $req->input('mechanic_name');
                    $mechanic->save();                     
            }
            else
            {        
                $validated = $req->validate([
                    'experience' => 'required',
                    'contact_number' => 'required'
                ]);

                $mechanic = new db_profile;
                $mechanic->u_id = $m->id;
                $mechanic->con_number = $req->input('contact_number');                
                $mechanic->experience = $req->input('experience');
                $mechanic->mechanic_fees = $req->input('mechanic_fees');
                $mechanic->save();               
            }

            if ($req->has('mechanic_image'))
            {
                $image = $req->file('mechanic_image');
                $filename = $image->getClientOriginalName();
                $path ="Uploadchanicalimage/";   
                $image->move($path,$filename);
                $user->image = $filename;
            }

            $user->name = $req->input('mechanic_name');
            $user->email = $req->input('mechanic_email'); 
            $user->city = $req->input('city');
            $user->save();

            $req->session()->put('mechanic',$user);
            return redirect()->route('manageprofile');
        }

         $mechanic = db_profile::select('db_profiles.experience','db_profiles.con_number','db_users.name','db_users.email','db_profiles.mechanic_fees')
        ->rightjoin('db_users','db_users.id','db_profiles.u_id')
        ->where('db_users.id',$m->id)
        ->get()->first(); 

        return view('mechanic.profile',compact('mechanic'));
    }

    function timeallocation(Request $req)
    {
        return "view('mechanic.timeallocation')";
    }

}

