<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Help extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_helps';
    
    protected $fillable = [
        'from',
        'message'
    ];
    
    protected $dates = [
        'deleted_at'
    ];
}