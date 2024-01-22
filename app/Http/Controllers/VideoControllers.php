<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoControllers extends Controller
{
    public function addVideo_view() {
        return view('addVideo');
    }

    public function addVideo_valid(Request $request) {
        $infoRolic=$request->all();
        $author=Auth::user()->id;

        $Rolic=Videos::create([
            "title" => $infoRolic['title'],
            ""
        ]);
    }
}
