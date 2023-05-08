<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends BaseModel
{

    use HasFactory;

    protected $fillable = [
        'name_sk',
        'slug_sk',
        'published_sk',
        'short_sk',
        'post_category_id',
        'profile_name_sk',
        'profile_alt_sk',
        'profile_description_sk',
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

    public function seo() : MorphOne
    {
        return $this->morphOne(SEO::class, 'seoable');
    }

    public function items() : HasMany
    {
        return $this->hasMany(PostItem::class);
    }

    public function getNameAttribute() : mixed
    {
        return $this->_translateProperty('name');
    }

    public function getPublishedAttribute() : mixed
    {
        return $this->_translateProperty('published');
    }

    public function getSlugAttribute() : mixed
    {
        return $this->_translateProperty('slug');
    }

    public function getShortAttribute() : mixed
    {
        return $this->_translateProperty('short');
    }

    public function getProfileImageAttribute() : Image | bool
    {
        return $this->images->where('profile', 1)->sortByDesc('created_at')->first() ?? false;
    }

}
