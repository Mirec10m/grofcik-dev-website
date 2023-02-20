<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function items() : HasMany
    {
        return $this->hasMany(PostItem::class);
    }

    public function getProfileImageAttribute() : Image | bool
    {
        return $this->images->where('profile', 1)->sortByDesc('created_at')->first() ?? false;
    }

}
