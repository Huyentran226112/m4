<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($language)
    {
        // Tạo session và gán giá trị ngôn ngữ được chọn từ view
        Session::put('language', $language);

        return redirect()->back();
    }
}
