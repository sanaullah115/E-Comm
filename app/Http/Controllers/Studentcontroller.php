<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    public function login()
    {
        return view('login');
    }
}
