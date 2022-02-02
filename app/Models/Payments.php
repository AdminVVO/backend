<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payments extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_payments';

    protected $fillable = [
        'name',
        'last_name',
        'card_number',
        'expiration',
        'cvv',
        'street_address',
        'apt',
        'city',
        'state',
        'zip_code',
        'country',
        'default',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}

