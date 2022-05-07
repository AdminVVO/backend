<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionFrequent extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id_question_frequents';

    protected $fillable = [
        'code',
        'name',
    ];
}
