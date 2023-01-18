<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize () : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules () : array
    {
        return [
            'username' => "required|string|max:255|unique:users,username",
            'name' => "required|string|max:255",
            'surname' => "required|string|max:255",
            'email' => "required|string|email|max:255|unique:users,email",
            'password' => "required|string|min:8|max:255|confirmed",
        ];
    }
}
