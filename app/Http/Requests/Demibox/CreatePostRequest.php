<?php

namespace App\Http\Requests\Demibox;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'name_sk' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'published_sk' => 'in:1,0',
            'published_en' => 'in:1,0',
            'description_sk' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            'post_category_id' => 'required|exists:post_categories,id', // dependent on config
            'tags' => 'required|array', // dependent on config
            'tags.*' => 'required|exists:post_tags,id', // dependent on config
        ];
    }
}
