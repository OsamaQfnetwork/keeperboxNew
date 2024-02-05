<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userDashboardController extends Controller
{
    public function UserDashboard()
    {
        return view('userDashboard');
    }
}
