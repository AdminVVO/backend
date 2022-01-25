<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotels extends Model
{
    use HasFactory, SoftDeletes;
    use \App\Traits\TraitUuid;

    protected $fillable = [
        'name',
        'currency',
        'starRating',
        'description',
        'phoneNumbers',
        'emails',
        'websiteUrl',
        'imagesUrl',
        'address',
        'location',
        'amenities',
        'roomCount',
        'checkIn',
        'checkOut',
        'termsAndConditions',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'imagesUrl' => 'array',
        'address' => 'array',
        'location' => 'array',
        'amenities' => 'array',
    ];

    public function Rooms()
    {
        return $this->hasMany('App\Models\RoomTypes', 'roomId', 'hotelId');
    }
}


