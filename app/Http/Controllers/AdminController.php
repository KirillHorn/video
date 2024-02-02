<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index_admin()
   {
      $videos = Videos::all();
      $status = Status::all();
      return view('admin.index', ['videos' => $videos, 'status' => $status]);
   }

   public function Reduct_status(Request $request, Videos $id)
   {

      $update_status = $id->fill([
         "status" => $request->status,
      ]);
      $update_status->save();
      if ($update_status) {
         return redirect()->back()->with("status", "вы изменили статус видео");
      } else {
         return redirect()->back()->with("error", "вы изменили статус видео");
      }
   }
}
