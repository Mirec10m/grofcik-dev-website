<?php

namespace App\Http\Requests\Demibox;

use Illuminate\Foundation\Http\FormRequest;

class SavePostDraftRequest extends FormRequest
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
        $post = $this->route('post');
        $id = $post ? $post->id : null;

        return [
            'name_sk' => 'nullable|string|max:255',
            'slug_sk' => "nullable|string|max:255|unique:posts,slug_sk,$id",
            'published_sk' => 'in:1,0',
            'short_sk' => 'nullable|string|max:255',
            'profile' => 'nullable|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif',
            'post_category_id' => config('demibox.blog.categories') ? 'nullable|exists:post_categories,id' : '',
            'tags' => config('demibox.blog.tags') ? 'nullable|array' : '',
            'tags.*' => config('demibox.blog.tags') ? 'nullable|exists:post_tags,id' : '',

            'items' => 'nullable|array',
            'items.*.type' => 'nullable|string|max:255',
            'items.*.order' => 'nullable|integer',
            'items.*.paragraph_text_sk' => 'nullable|string',
            'items.*.image_name_sk' => 'nullable|string|max:255',
            'items.*.image_alt_sk' => 'nullable|string|max:255',
            'items.*.image_description_sk' => 'nullable|string|max:255',
            'items.*.image_file' => 'nullable|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif',
        ];
    }
}
