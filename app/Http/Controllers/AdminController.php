<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index_admin() {
      $videos=Videos::all(); 
      $status=Status::all();
    return view('admin.index', ['videos'=>$videos, 'status' => $status]);
   }
}
