<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class PostItem extends BaseModel
{

    use HasFactory;

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

    public function getParagraphTextAttribute() : mixed
    {
        return $this->_translateProperty('paragraph_text');
    }

    public function getImageNameAttribute() : mixed
    {
        return $this->_translateProperty('image_name');
    }

    public function getImageAltAttribute() : mixed
    {
        return $this->_translateProperty('image_alt');
    }

    public function getImageDescriptionAttribute() : mixed
    {
        return $this->_translateProperty('image_description');
    }

    public function getImageAttribute() : Image | bool
    {
        return $this->images->sortByDesc('created_at')->first() ?? false;
    }

}
