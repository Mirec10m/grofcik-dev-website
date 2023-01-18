<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
     * @return array
     */
    public function rules () : array
    {
        $id = auth()->id();

        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => "required|string|email|max:255|unique:users,email,$id",
        ];
    }

}
