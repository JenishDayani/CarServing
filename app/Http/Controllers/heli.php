<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heli extends Controller
{
    function Home(){
        return view('welcome');
    }
}
