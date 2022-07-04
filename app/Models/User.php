<?php

namespace App\Models;

use App\Traits\Uuids;
use Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Uuids;
    
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name',
        'last_name',
        'full_name',
        'date_birth',
        'email',
        'phone',
        'other_phone',
        'sex',
        'promotions',
        'avatar',
        'password',
        'google_id',
        'google_token',
        'facebook_id',
        'facebook_token',
        'language_default',
        'currency_default',
        'timezone_default',
        'acount_actived',
        'service_fee',
        'constributions',
        'govermen_id',
        'rol_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'date_birth'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_birth'        => 'datetime:d-m-Y',
        'other_phone'       => 'array',
        'promotions'        => 'boolean',
        'language'          => 'array',
    ];

    public function scopeFullName()
    {
        $xplodeName = explode(' ', $this->where('id_user', Auth::id())->pluck('name')->first());
        $xplodeLastName = explode(' ', $this->where('id_user', Auth::id())->pluck('last_name')->first());

        return $xplodeName[0] .' '. $xplodeLastName[0];
    }

    public function scopeAvatar()
    {
        return $this->where('id_user', Auth::id())->pluck('avatar')->first();
    }

    public function listingChat()
    {
        return $this->hasMany(Listings::class, 'user_id');
    }

    public function scopeName($query, $code)
    {
        $xplodeName = explode(' ', $this->where('id_user', $code )->pluck('name')->first());
        $xplodeLastName = explode(' ', $this->where('id_user', $code )->pluck('last_name')->first());

        return $xplodeName[0] .' '. $xplodeLastName[0];
    }

    public function scopeAvatarInterna($query, $code)
    {
        return $this->where('id_user', $code)->pluck('avatar')->first();
    }

    public function scopeRole($query, $code)
    {
        return $this->where('id_user', $code)->pluck('rol_id')->first();
    }

    public function scopeCreatedAt($query, $code)
    {
        return $this->where('id_user', $code)->pluck('created_at')->first();
    }
}