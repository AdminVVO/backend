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
        'name_type',
        'file',
        'comment',
        'file_comm',
    ];

    public function scopePropertyName($query, $code)
    {
        return $this->where([ 'code' => $code ])->pluck('name')->first();

    }

    public function scopeProperty($query, $code)
    {
        return $this->where([ 'type' => $code ])->pluck('name_type')->first();

    }

    public function scopeGroup($query, $code)
    {
        return $this->where([ 'code' => $code ])->pluck('name')->first();

    }

    public function scopeTypeName($query, $type)
    {
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

    public function scopeTypeListing($query, $type)
    {
        switch ( $type ) {
            case 'entire_place':
                return 'Entire place';
                break;

            case 'private_room':
                return 'Private room';
                break;
                
            case 'shared_room':
                return 'Shared room';
                break;
        }
    }

}