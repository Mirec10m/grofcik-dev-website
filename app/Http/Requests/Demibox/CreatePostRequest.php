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
        $post = $this->route('post');
        $id = $post ? $post->id : null;

        config('demibox.blog.categories');

        return [
            'name_sk' => 'required|string|max:255',
            'slug_sk' => "required|string|max:255|unique:posts,slug_sk,$id",
            'published_sk' => 'in:1,0',
            'short_sk' => 'required|string|max:255',
            'profile' => 'required|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif',
            'post_category_id' => config('demibox.blog.categories') ? 'required|exists:post_categories,id' : '',
            'tags' => config('demibox.blog.tags') ? 'required|array' : '',
            'tags.*' => config('demibox.blog.tags') ? 'required|exists:post_tags,id' : '',
        ];
    }
}
