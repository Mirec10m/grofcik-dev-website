<?php

namespace App\Http\Requests\Demibox;

class UpdatePostRequest extends CreatePostRequest
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
        $rules = parent::rules();

        $rules['profile'] = 'nullable|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif';
        $rules['items.*.image_file'] = 'nullable|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif';
        $rules['seo.image'] = 'nullable|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif';

        return $rules;
    }
}
