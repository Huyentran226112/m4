<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    // khai bo moi quan he roles
    public function roles(){
        return $this->belongsToMany(Role::class,'group_roles','group_id','role_id');
}
}
