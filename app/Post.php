<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends BaseModel
{

    protected $fillable = [
        'name_sk',
        'name_en',
        'published_sk',
        'published_en',
        'description_sk',
        'description_en',
        'post_category_id',
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(PostTag::class)->withTimestamps()->withPivot('created_at');
    }

}
