<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    public function  registration_view() {
        return view('register');
    }

    public function  auth_view()
    {
        return view('auth');
    }
}
