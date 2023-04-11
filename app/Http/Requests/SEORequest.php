<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SEORequest extends FormRequest
{

    protected function addSEORules(array $rules, string $prefix = 'seo.') : array
    {
        $SEOrules = $this->SEORules($prefix);

        return array_merge($rules, $SEOrules);
    }

    private function SEORules(string $prefix = 'seo.') : array
    {
        return [
            "{$prefix}title_sk" => "required|string|max:255",
            "{$prefix}canonical_sk" => "required|string|max:255",
            "{$prefix}description_sk" => "required|string|max:255",
            "{$prefix}image" => "required|image|mimes:jpg,jpeg,jpe,bmp,png,webp,gif",
        ];
    }

}
