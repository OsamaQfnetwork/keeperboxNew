<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getStartedController extends Controller
{
    public function GetStarted()
    {
        return view('getStarted');
    }
}
