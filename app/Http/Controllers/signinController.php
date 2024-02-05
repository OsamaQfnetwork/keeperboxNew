<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signinController extends Controller
{
    public function Signin()
    {
        return view('signin');
    }
}
