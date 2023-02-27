<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PostTag extends BaseModel
{

    protected $fillable = [
        'name_sk',
        'slug_sk',
    ];

    public function posts() : BelongsToMany
    {
        return $this->belongsToMany(Post::class)->withTimestamps()->withPivot('created_at');
    }

    public function getNameAttribute() : mixed
    {
        return $this->_translateProperty('name');
    }

    public function getSlugAttribute() : mixed
    {
        return $this->_translateProperty('slug');
    }

}
