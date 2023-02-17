<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;

class PostCategory extends BaseModel
{

    protected $fillable = [
        'name_sk',
        'name_en',
    ];

    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }

}
