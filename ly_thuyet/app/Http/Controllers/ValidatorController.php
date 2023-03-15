<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Validator;

class ValidatorController extends Controller
{
    public function create(){
        return view('admin.validators.create');
    }
    // public function store1(Request $request){
    //     //nhận request
    //     $messages = [
    //         'username.required' => 'vui long nhap username',
    //         'password.required' => 'vui long nhap password',
    //         'username.max' => 'username qua dai',
    //         'password.min' => 'password phai lon hon 3 ki tu'
    //     ];
    //     $roles = [
    //         'username' => 'required|max:255',
    //         'password' => 'required|min:3',
    //     ];
    //     $validated = $request->validate($roles,$messages);

    // //     //lưu vào model
    //     dd(123);
    // }
    public function store(StoreUserRequest $request){
        //lưu vào model
        dd(123);
    // }
    // public function store3(Request $request){
    //     //nhận request
    //     $messages = [
    //         'username.required' => 'vui long nhap username',
    //         'password.required' => 'vui long nhap password',
    //         'username.max' => 'username qua dai',
    //         'password.min' => 'password phai lon hon 3 ki tu'
    //     ];
    //     $roles = [
    //         'username' => 'required|max:255',
    //         'password' => 'required|min:3',
    //     ];
        // $validator = Validator::make($request->all(),$roles,$messages);
        // // neu xac thuc that bai chuyen huong ve trang truoc
        // if ($validator->fails()) {
        //     return redirect()->route('validator.create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        // //xác thực
        //     dd(123);
        // //lưu vào db

        //chuyển hướng
    }
}
