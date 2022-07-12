<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currencs extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $primaryKey = 'id_currencs';

    protected $fillable = [
        'code',
        'name',
        'symbol',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'id_currencs',
    ];

    public function scopeSymbol($query, $code)
    {
            return $this->where('code', $code)->pluck('symbol')->first();
    }
}