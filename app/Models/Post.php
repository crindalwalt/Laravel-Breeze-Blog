<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class,'post_id');
    }
}
