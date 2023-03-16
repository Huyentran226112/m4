<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDanhsachRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $roles = [
            'name'=> 'required|max:255',
            'isbn'=> 'required|max:255',
            'author'=> 'required|max:255',
            'category_id'=> 'required|max:255',
            'pages'=> 'required',
            'publication_year'=>'required',
           
        ];
        return $roles;
    }
    public function messages(){
        $messages = [
            'name.required' => 'vui long nhap ten',
            'isbn.required' => 'vui long nhap ISBN',
            'author.required' => 'vui long nhap ten tac gia',
            'category_id.required' => 'vui long nhap the loai',
            'description.required' => 'vui long nhap mo ta',
            'pages.required' => 'vui long nhap so trang',
            'publication_year.required' => 'vui long nhap nam',
        ];
        return $messages;
    }
}
