<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $roles = [
            'username' => 'required|max:255',
            'password' => 'required|min:3',
        ];
        return $roles;
    }
    public function messages(){
        $messages = [
            'username.required' => 'vui long nhap username',
            'password.required' => 'vui long nhap password',
            'username.max' => 'username qua dai',
            'password.min' => 'password phai lon hon 3 ki tu'
        ];
        return $messages;
    }
    // Xu ly voi api
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }
}

