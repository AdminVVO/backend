<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listings extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_listings';

    protected $fillable = [
        'host',
        'description',
        'img',
        'status',
        'step',
        'user_id',
    ];

    protected $dates = [
        'deleted_at'
    ];
}

