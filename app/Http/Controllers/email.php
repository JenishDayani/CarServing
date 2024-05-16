<?php

namespace App\Http\Controllers;
use App\mail\MyTestMail;
use App\Models\db_users;

use Illuminate\Http\Request;

class email extends Controller
{
    public $rand;
    public function Home(Request $req)
    {
    //     $rand = random_int(000000,999999);   


    //     $verify = db_users::where(['email'=>$req->input('email')])->first();
    //     // $verify->name = 'hello';
    //     // $verify->save();

    //     $details = [
    //     'title' => 'TUSHAL 🙌🙌🙌🙌🙌' ,
    //     'body' => 'This is for testing email using devloper',
    //     'description' => 'Mail from Online Mechanic Service From Owner Of Jenish Dayani',
    //     'port' => $rand
    // ];
        // return $rand;

    // return $req->input('email');
    // \Mail::to($req->input('email'))->send(new \App\Mail\MyTestMail($details));




        if ($req->input('sendotp'))
        {
            $email = $req->input('email');
            $otp = $req->input('otp');
            $verify = db_users::where(['email'=>$email])->first();

            if ($verify)
            {
                $otp = random_int(000000,999999);
                $details = [
                    'title' => 'TUSHAL 🙌🙌🙌🙌🙌' ,
                    'body' => 'This is for testing email using devloper',
                    'description' => 'Mail from Online Mechanic Service From Owner Of Jenish Dayani',
                    'port' => $otp
                ];   
                \Mail::to($req->input('email'))->send(new \App\Mail\MyTestMail($details));

                return redirect()->route('sendotp',compact('otp','email'));
            }
            else
            {
                return redirect()->route('email');   
            }
        }


        return view('client.Email');
    }


    function otp(Request $req,$otp,$email)
    {
           // return redirect()->route('email',compact('email'));


        if ($req->input('login')){

            if ($otp==$req->input('otp')) {
            $user = db_users::where(['email'=>$email])->first();
            if ($user) {
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
               return "Login Successfully";
             }else
             {
                return "Wrong Otp Enter";
             }


            // code...
        }



        return view('client.otp');
    }





    function StatusEmail(Request $req,$id)
    {
        $user = db_users::find($id);
        $email = $user->email;

                $details = [
                    'title' => 'OnMechanic To your services fast' ,
                    'body' => 'This is for testing email using devloper',
                    'description' => 'Mail from Online Mechanic Service From Owner Of Jenish Dayani',
                    'port' => 'Your Account is Now '.$user->action,
                ];   
                \Mail::to($email)->send(new \App\Mail\MyTestMail($details));
        return redirect()->route('viewmechanic');

    }


    function time(Request $req,$email,$date)
    {
        return $email;
    }
}
