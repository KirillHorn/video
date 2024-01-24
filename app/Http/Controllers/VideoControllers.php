<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoControllers extends Controller
{
    public function addVideo_view() {
        $categories= Categories::all();
        return view('addVideo', ['categories' => $categories ]);
    }

    public function addVideo_valid(Request $request) {
        $infoRolic=$request->all();
        $author=Auth::user()->id;

        $img_info = $request->file('img')->hashName();
        $path_img = $request->file('img')->store('/public/img');

        $video_info = $request->file('video')->hashName();
        $path_video = $request->file('video')->store('/public/video');

        $Rolic=Videos::create([
            "title" => $infoRolic['title'],
            'video' => $video_info,
            "img" => $img_info,
            "description" =>  $infoRolic['description'],
            "users" => $author,
            "categories" => $infoRolic['categories'],
            "status" => 1,
        ]);

        if ($Rolic) {
            return redirect('/') -> with('videoadd','Добавлено видео');
        } else {
            return redirect()->back()->with('error','Ошибка добавлегтя');
        }
    }
    public function Video_view($id) {
        $videos=Videos::find($id);
        return view('Video', ['video' => $videos ]);
    }
}
