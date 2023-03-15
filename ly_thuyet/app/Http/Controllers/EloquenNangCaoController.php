<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;

class EloquenNangCaoController extends Controller
{
    public function HasOne(){
        //tim user co id = 1
        // $item = User::where('id','=',1)->first();

        $item = User::find(1);
        dd($item->roles);

        // Chi load MQH Phone
        // $item = User::with('comments')->find(1);
        // dd($item->toArray());
        // dd($item->phone);
    }
    public function saveHasOne(){
        // quanly
        $user = new User();
        $user->name = fake()->name();
        $user->password = '12345';
        $user->	image = 'image';
        $user->email = fake()->email();
        $user->birthday = '2023-02-23';
        $user->save(); //$user->id

        //$user->id
        $phone = new Phone();
        $phone->phone = '22446677';
        // $phone->user_id = $user->id;
        // $phone->save();

        //Lưu mối quan hệ hasOne
        $user->phone()->save($phone);

        dd($user->phone);
    }
    public function saveHasMany(){
        // post
        $post = new Post();
        $post->title = 'Bai viet moi';
        $post->user_id = 1;
        $post->save();//$post->id

        $comments = [
            [
                'content' => 'Dep qua',
                'user_id' => 1
            ],
            [
                'content' => 'Hay qua',
                'user_id' => 1
            ]
        ];

        foreach( $comments as $comment ){
        /*
        [
            'content' => 'Dep qua',
            'user_id' => 1
        ]
        */
            $objComment = new Comment();
            $objComment->content = $comment['content'];
            $objComment->user_id = $comment['user_id'];
            $objComment->post_id = $post->id;
            $objComment->save();
        }
    }
    public function saveBelongsToMany(){
        $array_roles = [
            [
                'name' => 'Bao ve sang'
            ],
            [
                'name' => 'Bao ve chieu'
            ]
        ];
        // Tao user
        $user = new User();
        $user->name = 'bac bao ve';
        $user->password = '12345';
        $user->image = 'image';
        $user->email = 'bacbaove@gmail.com';
        $user->birthday = '2023-02-23';
        $user->save(); //$user->id
        // Tao role
        foreach( $array_roles as $array_role ){
            $role = new Role();
            $role->name = $array_role['name'];
            $role->save();//$role->id
            // Set quyen
            $role_user = new RoleUser();
            $role_user->user_id = $user->id;
            $role_user->role_id  = $role->id;
            $role_user->save();
        }
    }
}
