<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Exceptions\UserNotFoundException;

class ExeptionController extends Controller
{
    public function fun_ModelNotFoundException($id){

        try {
            $user = User::find($id);
            if( !$user ){
                throw new UserNotFoundException("User ko ton tai");
            }
            // $user = new User();
            // $user->name = 'admin';
            // $user->email = 'admin123@gmail.com';
            // $user->save();//

            // $user = User::findOrFail($id);

        } catch (UserNotFoundException $e) {
            Log::error( $e->getMessage() );
            dd(  $e->getMessage() );
        }
        dd($user);
    }
    public function fun_UserNotFoundException(){

    }
}
