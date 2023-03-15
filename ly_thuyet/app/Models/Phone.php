<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
        // user_id(phones)=>id(users)
        // return $this->belongsTo(user::class,'user_id','id');

    }
}
