<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class SEO extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_sk',
        'description_sk',
        'canonical_sk',
    ];

    public function seoable () : MorphTo
    {
        return $this->morphTo('seoable');
    }

    public function images () : MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
