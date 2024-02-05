<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keeperboxController extends Controller
{
    public function Keeper()
    {
        return view('keeperbox');
    }
}
