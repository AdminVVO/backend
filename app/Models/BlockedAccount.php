<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockedAccount extends Model
{
    use HasFactory, Uuids;
    
    protected $primaryKey = 'id_blocked_accounts';

    protected $fillable = [
        'user_id',
        'typeUpload',
        'typeDocument',
        'country',
        'files',
    ];

    protected $casts = [
        'files' => 'array'
    ];
}