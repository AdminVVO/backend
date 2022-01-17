<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CodeVerification extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_code_verifications';
    
    protected $fillable = [
        'to',
        'code'
    ];
    
    protected $dates = [
        'deleted_at'
    ];
}