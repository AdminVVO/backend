<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestSafety extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_guest_safeties';

    protected $fillable = [
        'code',
        'name',
    ];

    public function scopeName($query, $code)
    {
        return $this->where([ 'code' => $code ])->pluck('name')->first();
    }
}
