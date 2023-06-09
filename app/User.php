<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'name',
        'surname',
        'position',
        'order',
        'menu_pinned',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function images() : MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getProfileImageAttribute() : Image | bool
    {
        return $this->images->where('profile', 1)->sortByDesc('created_at')->first() ?? false;
    }

    public function scopeNoSuperadmin(Builder $query) : void
    {
        $query->where('super_admin', 0);
    }

    public function getFullNameAttribute () : string
    {
        return "$this->name $this->surname";
    }

    public function getFormattedCreatedAtAttribute () : string
    {
        return Carbon::parse($this->created_at)->format('d.m.Y H:i:s');
    }

    public function getFormattedUpdatedAtAttribute () : ?string
    {
        return $this->updated_at ? Carbon::parse($this->updated_at)->format('d.m.Y H:i:s') : null;
    }

}
