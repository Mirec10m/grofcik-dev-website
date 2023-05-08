<?php

namespace App\Http\Requests\Demibox;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostTagRequest extends FormRequest
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
        $post_category = $this->route('post_tag');
        $id = $post_category ? $post_category->id : null;

        return [
            'name_sk' => 'required|string|max:255',
            'slug_sk' => "required|string|max:255|unique:post_tags,slug_sk,$id",
        ];
    }
}
