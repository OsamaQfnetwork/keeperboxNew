<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutusController extends Controller
{
    public function About()
    {
        return view('aboutus');
    }
}
