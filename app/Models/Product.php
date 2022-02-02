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

    public function categorie(){
        return  $this->belongsTo(CategoryProduct::class,'category_id');
    }
    public function type(){
        return  $this->belongsTo(TypeProduct::class,'type_id');
    }
    public function typespace(){
        return  $this->belongsTo(TypeSpaceProduct::class,'typespace_id');
    }
    public function description(){
        return  $this->belongsTo(DescriptionProduct::class,'description_id');
    }
}
