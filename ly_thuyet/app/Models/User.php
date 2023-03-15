<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function phone(){
        // moi quan he mot mot
       return $this->hasOne(Phone::class,'user_id','id');
    }
    //    moi quan he mot nhieu
    public function posts(){
        return $this->hasMany(Post::class);
        //user_id : khoa ngoaij tham chieu toi bang hieenj tai
        // id:khoa chinh cua bang hien tai
        //    return $this->HasMany(phone::class,'user_id','id');
     }
    //  1 user co nhieu binh luan
     public function comments(){
        return $this->HasMany(Post::class);
     }
    //  1 user co nhieu roles (vai tro)
     public function roles(){
        return $this->belongsToMany(Role::class);
        //user quan he nhieu nhieu voi role
        // thong qua ban trung gian la role_user
        // user_id tham chieu den bang user hien tai
        // role_id tham chieu den bang role(quan he)
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
     }
    //  khai bao mối quan hệ group
    public function group(){
        return $this->belongsTo(Group::class);
    }
    public function hasPermission($role_name){

    }
}
