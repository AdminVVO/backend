<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomTypes extends Model
{
    use HasFactory, SoftDeletes;
    use \App\Traits\TraitUuid;

    protected $fillable = [
        'name',
        'description',
        'starRating',
        'maxOccupancy',
        'amenities',
        'imagesUrl',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'imagesUrl' => 'array',
        'amenities' => 'array',
    ];

    public function Hotels()
    {
        return $this->belongsTo('App\Models\Hotels', 'hotelId', 'roomId');
    }
}