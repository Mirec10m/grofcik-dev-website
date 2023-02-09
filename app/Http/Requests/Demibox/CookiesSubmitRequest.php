<?php

namespace App\Http\Requests\Demibox;

use Illuminate\Foundation\Http\FormRequest;

class CookiesSubmitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() : array
    {
        return [
            'cookies_analytical' => 'in:1,0',
            'cookies_marketing' => 'in:1,0',
        ];
    }
}
