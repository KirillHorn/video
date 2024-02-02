<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

class indexController extends Controller
{
    public function index()
    {
        $videos = Videos::where("status", '1')->get();
        return view('index', ['videos' => $videos]);
    }
}
