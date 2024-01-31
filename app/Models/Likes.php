<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Videos;

class Likes extends Model
{
    use HasFactory;

    protected $fillable = ['id_video', 'id_user'];

    public function video() {
        return $this->hasMany(Videos::class, 'id_video', 'id');
    }
    
}
