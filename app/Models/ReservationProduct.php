<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationProduct extends Model
{
    use HasFactory;
     // guarded desabilita la creacion masiva de los datos especificados
     protected $guarded =['id','created_at','updated_at'];
    
    public function products(){
        return $this->hasMany(Product::class);
    }

}
