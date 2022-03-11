<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomsProperty extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_rooms_properties';

    protected $fillable = [
        'code',
        'name',
        'type',
    ];

    public function scopePropertyName($query, $code)
    {
        return $this->where([ 'code' => $code ])->pluck('name')->first();

    }

    public function scopeTypeName($query, $type)
    {
        $type = $this->where('type', $type)->pluck('type')->first();

        switch ( $type ) {
            case 'apartment':
                return 'Apartment';
                break;

            case 'house':
                return 'House';
                break;
                
            case 'secondary':
                return 'Secondary Unit';
                break;
                
            case 'unique':
                return 'Unique Space';
                break;
                
            case 'breakfast':
                return 'Bad and Breakfast';
                break;
                
            case 'boutique':
                return 'Boutique Hotel';
                break;
        }
    }

}