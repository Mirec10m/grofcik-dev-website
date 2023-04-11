<?php

namespace App\Http\Requests\Demibox;

use App\Http\Requests\SEORequest;

class CreatePostRequest extends SEORequest
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
        $post = $this->route('post');
        $id = $post ? $post->id : null;

        $rules = [
            'name_sk' => 'required|string|max:255',
            'slug_sk' => "required|string|max:255|unique:posts,slug_sk,$id",
            'published_sk' => 'in:1,0',
            'short_sk' => 'required|string|max:255',
            'profile' => 'required|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif',
            'profile_name_sk' => 'required|string|max:255',
            'profile_alt_sk' => 'required|string|max:255',
            'profile_description_sk' => 'required|string|max:255',
            'post_category_id' => config('demibox.blog.categories') ? 'required|exists:post_categories,id' : '',
            'tags' => config('demibox.blog.tags') ? 'nullable|array' : '',
            'tags.*' => config('demibox.blog.tags') ? 'required|exists:post_tags,id' : '',

            'items' => 'required|array',
            'items.*.type' => 'required|string|max:255',
            'items.*.order' => 'required|integer',
            'items.*.paragraph_text_sk' => 'required_if:items.*.type,paragraph|string',
            'items.*.image_name_sk' => 'required_if:items.*.type,image|string|max:255',
            'items.*.image_alt_sk' => 'required_if:items.*.type,image|string|max:255',
            'items.*.image_description_sk' => 'required_if:items.*.type,image|string|max:255',
            'items.*.image_file' => 'required_if:items.*.type,image|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif',
        ];

        return $this->addSEORules($rules);
    }

}
