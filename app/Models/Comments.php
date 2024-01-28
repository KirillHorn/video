<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "comment",
        "video",
        "user_id",
    ];

    public function users() {
        return  $this->belongsTo(User::class, 'user_id', 'id');
    }
}
