<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //  1 bai viet se thuoc ve user nao do
    // post se thuoc ve mot user
    public function user(){
        // user_id=>id(user)
        $this->belongsTo(User::class,'user_id','id');
    }
    // 1 post co nhieu comment
    public function comments(){
        // return $this->hasMany(Comment::class,'post_id','id');
        return $this->hasMany(Comment::class);


    }
}
