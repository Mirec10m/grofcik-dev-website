<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class PostItem extends BaseModel
{

    protected $fillable = [
        'post_id',
        'type',
        'order',
        'paragraph_text_sk',
        'image_name_sk',
        'image_alt_sk',
        'image_description_sk',
    ];

    public function images() : MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function post() : BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function getImageAttribute() : Image | bool
    {
        return $this->images->sortByDesc('created_at')->first() ?? false;
    }

}
