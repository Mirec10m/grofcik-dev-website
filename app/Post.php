<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Post extends BaseModel
{

    protected $fillable = [
        'name_sk',
        'slug_sk',
        'published_sk',
        'short_sk',
        'post_category_id',
    ];

    public function images() : MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(PostTag::class)->withTimestamps()->withPivot('created_at');
    }

    public function getProfileImageAttribute()
    {
        return $this->images->where('profile', 1)->sortByDesc('created_at')->first() ?? false;
    }

}
