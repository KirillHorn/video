<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
}
