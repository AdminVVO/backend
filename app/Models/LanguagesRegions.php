<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LanguagesRegions extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_languages_regions';

    protected $fillable = [
        'code',
        'name',
        'native',
        'currency',
        'languages',
        'suggested',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'id_languages_regions',
    ];
}