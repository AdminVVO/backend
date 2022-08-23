<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScenicViews extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_scenic_views';

    protected $fillable = [
        'code',
        'name',
        'file',
        'type',
    ];

    public function scopeName($query, $code)
    {
        return $this->where([ 'code' => $code ])->pluck('name')->first();
    }
}

