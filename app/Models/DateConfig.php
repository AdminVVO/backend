<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateConfig extends Model
{
    use HasFactory;

    protected $table = 'date_config';
    protected $primaryKey = 'id_date_config';

    protected $fillable = [
        'id_date_config',
        'date',
        'price',
        'is_active',
        'listing_id',
    ];
}
