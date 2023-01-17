<?php

namespace App\Http\Requests\Superadmin;

use Illuminate\Foundation\Http\FormRequest;

class CreateExamplesRequest extends FormRequest
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
        return [
            'name_sk' => 'required|string|max:255',
            'type_sk' => 'required|string|max:255',
            'short_sk' => 'required|string|max:255',
            'description_sk' => 'required|string',
            'price' => 'nullable',
            'show' => 'in:1,0',
            'category_id' => 'required|integer|between:1,5',
            'distribution_date' => 'nullable|date_format:Y-m-d',
            'profile' => 'required|file',
        ];
    }
}
