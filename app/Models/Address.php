<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_addresses';

    protected $fillable = [
        'country',
        'street_address',
        'suite',
        'city',
        'state',
        'zip_code',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}