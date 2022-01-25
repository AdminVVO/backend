<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accommodation extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_accommodations';
    
    protected $fillable = [
       'type',
       'name',
       'address1',
       'city',
       'countryCode',
       'hotelRating',
       'latitude',
       'longitude',
       'propertyCategory',
       'proximityDistance',
       'rateCurrencyCode',
       'thumbNailUrl',
       'tripAdvisorRating',
    ];
    
    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'thumbNailUrl' => 'array'
    ];
}
