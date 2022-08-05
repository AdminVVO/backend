<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class PreListing extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    
    protected $primaryKey = 'id_pre_listings';

    protected $fillable = [
        'status',
        'propery',
        'group',
        'privacy',
        'longitude',
        'latitude',
        'country',
        'region',
        'city',
        'postcode',
        'street',
        'suite',
        'guest',
        'bed',
        'bedroom',
        'bathroom',
        'amenities',
        'photos',
        'title',
        'aspect',
        'description',
        'price',
        'discount',
        'legal',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'amenities' => 'array',
        'photos' => 'array',
        'aspect' => 'array',
        'legal' => 'array',
        'discount' => 'boolean',
    ];
}
