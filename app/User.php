<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'surname',
        'email',
        'password',
        'admin',
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
