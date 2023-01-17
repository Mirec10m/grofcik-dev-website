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
            // General
            'name_sk' => 'required|string|max:255',
            'type_sk' => 'required|string|max:255',
            'short_sk' => 'required|string|max:255',
            // Description
            'description_sk' => 'required|string',
            // Pricing
            'price' => 'required|numeric|between:0,999999.99',
            'vat' => 'in:1,0',
            'discount' => 'nullable|numeric|between:0,99.99',
            // Profile image
            'profile' => 'required|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif',
            // Other
            'category_id' => 'required', // 'category_id' => 'required|exists:categories,id',
            'in_stock' => 'required|integer|min:0',
            'stored_date' => 'required|date_format:Y-m-d',
            'visible' => 'in:1,0',
            // SEO
            'seo.title_sk' => 'nullable|string|max:255',
            'seo.description_sk' => 'nullable|string|max:255',
            'seo.canonical_sk' => 'nullable|string|max:255',
            'seo.image_sk' => 'nullable|image|mimes:jpg,jpeg,png',
        ];
    }
}
