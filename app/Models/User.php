<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'date_birth',
        'email',
        'phone',
        'sex',
        'promotions',
        'password',
        'google_id',
        'facebook_id',
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
    ];
}