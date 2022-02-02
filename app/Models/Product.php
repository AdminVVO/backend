<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // guarded desabilita la creacion masiva de los datos especificados
    protected $guarded =['id','created_at','updated_at'];
    // casts permite agregar esos campos en formato json
    protected $casts = [
        'imgUrl' => 'array',
        'favorite' => 'array',
        'alarm' => 'array',
        'outstandingService' => 'array',
    ];

    public function categories(){
        return $this->hasOne(CategoryProduct::class);
    }
    public function typeProducts(){
        return $this->hasOne(TypeProduct::class);
    }
    public function typeSpaceProducts(){
        return $this->hasOne(TypeSpaceProduct::class);
    }
    public function descriptionProducts(){
        return $this->hasOne(DescriptionProduct::class);
    }
}
