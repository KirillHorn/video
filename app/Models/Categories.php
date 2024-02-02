<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Videos;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title'
    ];

    public function categories() {
        return $this->hasMany(Videos::class,'categories','id');
    }
}
