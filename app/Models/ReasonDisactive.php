<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReasonDisactive extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_reason_disactives';

    protected $fillable = [
        'reason',

        'listing_id',
        'user_id',
    ];
    
    protected $dates = [
        'deleted_at'
    ];
}
