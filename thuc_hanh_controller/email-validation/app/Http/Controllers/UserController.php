<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function validationEmail(Request $request)
    {
        // Lấy dữ liệu Email từ URL
        $email = $request->email;

        $isEmail = true;

        // Kiểm tra validate email theo hàm mặc định thư viện PHP
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isEmail = false;
        }

        return view('index', compact('isEmail'));
    }
}
