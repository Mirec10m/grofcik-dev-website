<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostCategory extends BaseModel
{

    use HasFactory;

    protected $fillable = [
        'name_sk',
        'slug_sk',
    ];

    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
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
