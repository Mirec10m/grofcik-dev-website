<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends BaseModel
{
    protected $fillable = [
        'basename',
        'image',
        'thumb',
        'path',
        'profile',
    ];

    public function imageable() : MorphTo
    {
        return $this->morphTo('imageable');
    }

    public function get_type($type = 'basename') : string
    {
        return $this->path . $this->$type;
    }

}
