<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Dislikes;

class Videos extends Model
{
    use HasFactory;

    protected $fillable =[
        "id",
        "title",
        "img",
        "video",
        "description",
        "users",
        "categories",
        "status"

    ];

    public function user() {
        return $this->belongsTo(User::class,'users','id');
    }

    public function Like() {
        return $this->hasMany(Likes::class, 'id_video', 'id');
    }

    public function likesCount()
    {
        return $this->Like->count();

    }

    public function DisLike() {
        return $this->hasMany(Dislikes::class, 'id_video', 'id');
    }

    public function DislikesCount()
    {
        return $this->DisLike->count();

    }

    public function statuses() {
        return $this->belongsTo(Status::class, 'status', 'id');
    }
}
