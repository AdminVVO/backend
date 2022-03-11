<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenitiesSafety extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_amenities_safeties';

    protected $fillable = [
        'code',
        'name',
        'type',
    ];
}