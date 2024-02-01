<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use App\Models\Categories;
use App\Models\Comments;
use App\Models\Likes;
use App\Models\Dislikes;
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
        $comment=Comments::where('video', $id)->get();
        return view('Video', ['video' => $videos, 'comment' => $comment ]);
    }

    public function comment_Add(Request $request,$id) {
        $comment = $request->all();
        $author=Auth::user()->id;
        $addComment = Comments::create([
            "comment" => $comment["comment"],
            "video" => $id,
            "user_id" => $author,
        ]);

        if ($addComment ) {
            return redirect()->back()->with("addComment", "Вы добавили комментарии к видео");
        } else {
            return redirect()->back()->with("ErrorComment", "Ошибка добавление");
        }
    }

    public function like_add($id) {
    
        $author=Auth::user()->id;
       
        $existingLike=Likes::where('id_user', $author)
        ->where('id_video', $id)
        ->first();
  

        if ($existingLike) {
            return redirect()->back()->with('error', 'Вы не можете поставить лайк!');
        } else { 
            Likes::create([
            'id_user' => $author,
            'id_video' => $id,
        ]);
        return redirect()->back()->with('likes', 'Вы проставили лайк!');
        }
        
    }

    public function Dislike_add($id) {
    
    $author=Auth::user()->id;
   
    $existingLike=Dislikes::where('id_user', $author)
    ->where('id_video', $id)
    ->first();


    if ($existingLike) {
        return redirect()->back()->with('error', 'Вы не можете поставить диз!');
    } else { 
        Dislikes::create([
        'id_user' => $author,
        'id_video' => $id,
    ]);
    return redirect()->back()->with('likes', 'Вы проставили Диз!');
    }
    
}
}
