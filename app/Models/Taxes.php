<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxes extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_taxes';

    protected $fillable = [
        'country',
        'id_ein',
        'name',
        'address_1',
        'address_2',
        'city',
        'region',
        'zip_code',
        'default',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}