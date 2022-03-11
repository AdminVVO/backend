<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name',
        'last_name',
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
    ];

    public function scopeFullName()
    {
        $xplodeName = explode(' ', $this->where('id_user', Auth::id())->pluck('name')->first());
        $xplodeLastName = explode(' ', $this->where('id_user', Auth::id())->pluck('last_name')->first());

        return $xplodeName[0] .' '. $xplodeLastName[0];
    }

    public function scopeAvatar()
    {
        return $this->pluck('avatar')->first();
    }
}